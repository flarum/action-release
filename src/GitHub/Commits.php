<?php

namespace Flarum\Release\GitHub;

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
                ->api
                ->repository()
                ->commits()
                ->all(
                    $this->release->repositoryUsername(),
                    $this->release->repository(),
                    [
                        'sha'      => $this->release->branch,
                        'since'    => $this->release->lastTag(),
                        'per_page' => 100,
                        'page'     => $page
                    ]
                );

            $commits->merge($response ?? []);

            empty($response) ? $page = null : $page++;
        }

        return $commits;
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array(
            [$this->commits, $name],
            $arguments
        );
    }
}