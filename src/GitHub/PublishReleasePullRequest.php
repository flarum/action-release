<?php

namespace Flarum\Release\GitHub;

use Flarum\Release\MarkdownWriter;
use Flarum\Release\Release;

class PublishReleasePullRequest
{
    public function __construct(protected Release $release)
    {}

    public function publish(MarkdownWriter $writer): void
    {
        $this->release
            ->gitHubRest
            ->issue()
            ->create(
                $this->release->repositoryUsername(),
                $this->release->repository(),
                [
                    'title' => "Release {$this->release->nextTag()}",
                    'body' => (string) $writer,
                ]
            );
    }
}