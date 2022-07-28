<?php

namespace Flarum\Release\GitHub;

use Composer\Semver\Comparator;
use Flarum\Release\Release;

class LastTag
{
    protected array $tag;

    public function __construct(protected Release $release)
    {
        $this->tag = $this->retrieve();
    }

    protected function retrieve()
    {
        $latest = null;

        $page = 1;

        while($page !== null) {
            $response = $this->release
                ->api
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
                $latest = ! $latest || Comparator::greaterThan($latest['name'], $tag['name'])
                    ? $tag
                    : $latest;
            }

            empty($response) ? $page = null : $page++;
        }

        return $latest;
    }
}