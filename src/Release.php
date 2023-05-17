<?php

namespace Flarum\Release;

use Composer\Semver\VersionParser;
use Flarum\Release\Donations as Collection;
use Flarum\Release\GitHub\PublishReleasePullRequest;
use Github\AuthMethod;
use Github\Client as GitHubClient;
use Github\HttpClient\Builder;
use GraphQL\Client as GraphQLClient;
use Illuminate\Support\Arr;

class Release
{
    const REPOSITORY = 'flarum/framework';
    public GitHubClient $gitHubRest;
    public GraphQLClient $gitHubGraphQL;
    public GraphQLClient $openCollective;
    protected ?string $nextTag = null;

    public function __construct(
        public string $branch = 'main'
    )
    {
        $this->gitHubRest = $this->gitHubRestClient();
        $this->gitHubGraphQL = $this->gitHubGraphQL();
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

    public function donations(): Donations
    {
        return Donations::make()
            ->merge((new OpenCollective\Donations($this))->sumByLogin())
            ->merge((new GitHub\Donations($this))->sumByLogin());
    }

    public function publish(MarkdownWriter $writer)
    {
        (new PublishReleasePullRequest($this))->publish($writer);
    }

    private function newHttp(): Builder
    {
        $http = new Builder;

        $http->addPlugin(new Http\Plugins\RateLimitPlugin);

        return $http;
    }

    private function gitHubGraphQL(): GraphQLClient
    {
        $token = getenv('GITHUB_TOKEN') ?? getenv('INPUT_GITHUB_TOKEN');
        
        if (! $token) {
            phpinfo();
        }
        
        return new GraphQLClient(
            'https://api.github.com/graphql',
            ['Authorization' => "bearer " . $token],
            [],
            $this->newHttp()->getHttpClient()
        );
    }

    private function gitHubRestClient(): GitHubClient
    {
        $client = new GitHubClient($this->newHttp());

        $client->authenticate($_ENV['GITHUB_TOKEN'] ?? $_ENV['INPUT_GITHUB_TOKEN'], AuthMethod::ACCESS_TOKEN);

        return $client;
    }

    private function openCollectiveClient(): GraphQLClient
    {
        return new GraphQLClient(
            'https://api.opencollective.com/graphql/v2',
            ['Api-Key' => $_ENV['OPEN_COLLECTIVE_TOKEN'] ?? $_ENV['INPUT_OPEN_COLLECTIVE_TOKEN']],
            [],
            $this->newHttp()->getHttpClient()
        );
    }
}
