<?php

namespace Flarum\Release\GitHub;

use Composer\Semver\Comparator;
use Flarum\Release\Release;

/**
 * @property string $name
 * @property array $commit
 * @property string $zipball_url
 * @property string $tarball_url
 * @property string $node_id
 * @property string $time
 */
class LastTag
{
    protected array $tag;

    public function __construct(protected Release $release)
    {
        $this->tag = $this->retrieve();
    }

    protected function retrieve(): array
    {
        $latest = null;

        $page = 1;

        while($page !== null) {
            $response = $this->release
                ->gitHubRest
                ->repository()
                ->tags(
                    $this->release->repositoryUsername(),
                    $this->release->repository(),
                    [
                        'per_page' => 100,
                        'page' => $page
                    ]
                );

            foreach ($response ?? [] as $tag) {
                $latest = ! $latest || Comparator::greaterThan($tag['name'], $latest['name'])
                    ? $tag
                    : $latest;
            }

            empty($response) ? $page = null : $page++;
        }

        if ($latest) {
            $commit = $this->release->gitHubRest->repo()
                ->commits()
                ->show(
                    $this->release->repositoryUsername(),
                    $this->release->repository(),
                    $latest['commit']['sha']
                );

            $latest['time'] = $commit['commit']['author']['date'] ?? $commit['commit']['committer']['date'];
        }

        return $latest;
    }

    public function __get(string $name)
    {
        return $this->tag[$name] ?? null;
    }
}