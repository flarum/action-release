<?php

namespace Flarum\Release;

use Composer\Semver\VersionParser;
use Github\AuthMethod;
use Github\Client as GitHubClient;
use Github\HttpClient\Builder;
use GraphQL\Client as GraphQLClient;
use Illuminate\Support\Arr;
use Stash\Driver\FileSystem;
use Stash\Pool;

class Release
{
    const REPOSITORY = 'flarum/framework';
    public GitHubClient $gitHub;
    public GraphQLClient $openCollective;
    protected ?string $nextTag = null;

    public function __construct(
        public string $branch = 'main'
    )
    {
        $this->gitHub = $this->gitHubClient();
        $this->openCollective = $this->openCollectiveClient();
    }

    public function repositoryUsername(): string
    {
        return explode('/', static::REPOSITORY)[0];
    }

    public function repository()
    {
        return explode('/', static::REPOSITORY)[1];
    }

    public function commits(): GitHub\Commits
    {
        return new GitHub\Commits($this);
    }

    public function nextTag(): string
    {
        if (! $this->nextTag) {
            $lastTag = $this->lastTag();

            $normalized = (new VersionParser())->normalize($lastTag->name);

            [$major, $minor, $patch] = explode('.', $normalized);

            $minor++;

            $this->nextTag = "v$major.$minor.0";
        }

        return $this->nextTag;
    }

    public function setTag(string $tag): static
    {
        $this->nextTag = $tag;

        return $this;
    }

    public function lastTag(): GitHub\LastTag
    {
        return new GitHub\LastTag($this);
    }

    public function changelog(): Changelog
    {
        $changelog = new Changelog;

        $this->commits()
            ->withoutBot()
            ->each(function (array $commit) use ($changelog) {
                $change = new GitHub\Change(
                    $this,
                    Arr::get($commit, 'sha'),
                    Arr::get($commit, 'commit.message'),
                );

                $changelog
                    ->changes
                    ->push($change);

                $changelog
                    ->contributors
                    ->push(Arr::get($commit, 'author'));
            });

        $changelog
            ->changes
            ->whereNotNull('issue')
            ->each(function (GitHub\Change $change) use ($changelog) {
                $changelog
                    ->reporters
                    ->push(Arr::get($change->issue, 'user'));
            });

        return $changelog;
    }

    public function donations()
    {
        return (new OpenCollective\Contributions($this));
    }

    private function gitHubClient(): GitHubClient
    {
        $http = new Builder;

        $http->addPlugin(new Http\Plugins\RateLimitPlugin);

        $client = new GitHubClient($http);

        $client->authenticate($_ENV['GITHUB_TOKEN'], AuthMethod::ACCESS_TOKEN);

        return $client;
    }

    private function openCollectiveClient(): GraphQLClient
    {
        $http = new Builder;

        $http->addPlugin(new Http\Plugins\RateLimitPlugin);

        return new GraphQLClient(
            'https://api.opencollective.com/graphql/v2',
            ['Api-Key' => $_ENV['OPEN_COLLECTIVE_TOKEN']],
            [],
            $http->getHttpClient()
        );
    }
}