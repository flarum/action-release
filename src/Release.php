<?php

namespace Flarum\Release;

use Composer\Semver\VersionParser;
use Github\AuthMethod;
use Github\Client;
use Github\HttpClient\Builder;
use Illuminate\Support\Arr;
use Stash\Driver\FileSystem;
use Stash\Pool;

class Release
{
    const REPOSITORY = 'flarum/framework';
    public Client $api;
    protected ?string $nextTag = null;

    public function __construct(
        public string $branch = 'main'
    )
    {
        $this->api = $this->api();
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

            $this->nextTag = "$major.$minor.0";
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

    protected function api(): Client
    {
        $http = new Builder;

        $http->addPlugin(new GitHub\Plugins\RateLimitPlugin);

        $client = new Client($http);

        $client->authenticate($_ENV['GITHUB_TOKEN'], AuthMethod::ACCESS_TOKEN);

        $client->addCache(new Pool(
            new FileSystem([
                'path' => __DIR__ . '/../cache/github/'
            ])
        ));

        return $client;
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
                    Arr::get($commit, 'author.login')
                );

                $changelog->changes->push($change);
                $changelog
                    ->contributors
                    ->push(Arr::get($commit, 'author'));
            });

        return $changelog;
    }
}