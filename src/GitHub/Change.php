<?php

namespace Flarum\Release\GitHub;

use Flarum\Release\Release;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Change
{
    public ?array $pr = null;
    public array $labels = [];
    public ?string $type = null;
    public ?string $subject = null;
    public ?array $issue = null;

    public function __construct(
        protected Release $release,
        public string $sha,
        public string $message,
        public string $login,
        public array $stats
    )
    {
        $this->enrich($sha);
    }

    public function __toString(): string
    {
        return $this->message;
    }

    protected function enrich(string $sha): void
    {
        $repository = Release::REPOSITORY;

        $pr = Arr::get($this->release
            ->api
            ->search()
            ->issues("$sha repo:$repository is:pr"), 'items.0');

        if ($pr) {
            $this->labels = Arr::pull($pr, 'labels', []);

            $this->issue = $this->getIssue(Arr::get($pr, 'body'));

            $this->pr = Arr::only($pr, ['number', 'title', 'author_association']);

            $description = "{$pr['title']} [#{$pr['number']}]";
        } else {
            $shortSha = substr($sha, 0, 7);

            $description = explode("\n", $this->message)[0] . " ([$shortSha]($this->sha))";
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
            return Arr::only($this->release
                ->api
                ->issues()
                ->show(
                    $this->release->repositoryUsername(),
                    $this->release->repository(),
                    intval($m['issue'])
                ), ['number', 'user', 'labels', 'author_association']);
        }

        return null;
    }

    public function getType(string $type = null)
    {
        switch ($type) {
            case 'feat':
                return 'Added';
            case 'fix':
                return 'Fixed';
            case 'removed':
            case 'deprecated':
            case 'security':
                return Str::ucfirst($type);
            default:
                return 'Changed';
        }
    }
}