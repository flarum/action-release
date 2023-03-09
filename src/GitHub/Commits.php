<?php

namespace Flarum\Release\GitHub;

use Carbon\Carbon;
use Flarum\Release\Release;
use Illuminate\Support\Collection;

/**
 * @mixin Collection
 */
class Commits
{
    protected Collection $commits;

    public function __construct(protected Release $release)
    {
        $this->commits = $this->retrieve();
    }

    protected function retrieve(): Collection
    {
        $page = 1;

        $commits = new Collection;

        while ($page !== null) {
            $response = $this->release
                ->gitHubRest
                ->repository()
                ->commits()
                ->compare(
                    $this->release->repositoryUsername(),
                    $this->release->repository(),
                    $this->release->lastTag()->commit['sha'],
                    'main',
                    null,
                    [
                        'per_page' => 100,
                        'page'     => $page
                    ]
                )['commits'];

            $commits = $commits->merge($response ?? []);

            empty($response) ? $page = null : $page++;
        }

        return $commits;
    }

    public function withoutBot(): Collection
    {
        return $this
            ->where('author.login', '!=', 'flarum-bot')
            ->where('author.login', '!=', 'dependabot[bot]');
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array(
            [$this->commits, $name],
            $arguments
        );
    }
}
