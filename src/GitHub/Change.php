<?php

namespace Flarum\Release\GitHub;

use Flarum\Release\Release;
use Github\Exception\RuntimeException;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Change
{
    public ?array $pr = null;
    public array $labels = [];
    public ?string $type = null;
    public ?string $subject = null;
    public ?array $issue = null;
    public string $message = '';

    public function __construct(
        protected Release $release,
        public array $commit,
    )
    {
        $this->enrich($commit);
    }

    public function __toString(): string
    {
        return $this->message;
    }

    protected function enrich(array $commit): void
    {
        $repository = Release::REPOSITORY;

        $sha = Arr::get($commit, 'sha');

        $pr = Arr::get($this->release
            ->gitHubRest
            ->search()
            ->issues("$sha repo:$repository is:pr"), 'items.0');

        if ($pr) {
            $author = Arr::get($pr, 'user.login');

            $this->labels = Arr::pull($pr, 'labels', []);

            $body = Arr::get($pr, 'body');

            if (! $body) return;

            $this->issue = $this->getIssue($body);

            $this->pr = Arr::only($pr, ['number', 'title', 'author_association']);

            $description = "{$pr['title']} by @$author [#{$pr['number']}]";
        } else {
            $author = Arr::get($commit, 'author.login');
            $message = Arr::get($commit, 'commit.message');

            $description = explode("\n", $message)[0] . " by @$author ($sha)";
        }

        $this->type = $this->getType();

        if (preg_match('~^(?<type>[^\(:]+)(?<subject>\([^\)]+\))?:\s?~', $description, $m)) {
            $this->type = $this->getType(Arr::get($m, 'type'));
            $this->subject = Arr::get($m, 'subject');

            $description = Str::replaceFirst($m[0], '', $description);
        }

        $this->message = ($this->subject ? "$this->subject " : '') . $description;
    }

    protected function getIssue(string $body): ?array
    {
        if (preg_match('~\#(?<issue>[0-9]+)~m', $body, $m)) {
            try {
                return Arr::only($this->release
                    ->gitHubRest
                    ->issues()
                    ->show(
                        $this->release->repositoryUsername(),
                        $this->release->repository(),
                        intval($m['issue'])
                    ),
                    ['number', 'user', 'labels', 'author_association']);
            } catch (RuntimeException $e) {
                if ($e->getCode() === 404) return null;

                throw $e;
            }
        }

        return null;
    }

    public function getType(string $type = null): string
    {
        if (str_starts_with($this->subject, 'fix ') || str_starts_with($this->subject, 'Fix ')) {
            return 'Fixed';
        }

        return match ($type) {
            'feat' => 'Added',
            'fix' => 'Fixed',
            'removed', 'deprecated', 'security' => Str::ucfirst($type),
            default => 'Changed',
        };
    }

    public function shouldBeLogged(): bool
    {
        if (str_starts_with($this->subject, 'Apply fixes from StyleCI')
            || str_starts_with($this->subject, '`yarn format`')
            || str_starts_with($this->subject, 'yarn format')
        ) {
            return false;
        }

        return ! in_array($this->subject, ['(regression)', '(test)', '(qa)']);
    }
}
