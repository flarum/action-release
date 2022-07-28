<?php

namespace Flarum\Release;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use Github\AuthMethod;
use Github\Client;
use Illuminate\Support\Arr;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class Release
{
    const REPOSITORY = 'flarum/framework';
    public Client $api;

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

    public function lastTag(): GitHub\LastTag
    {
        return new GitHub\LastTag($this);
    }

    protected function api(): Client
    {
        $client = new Client();

        $client->authenticate($_ENV['GITHUB_TOKEN'], AuthMethod::ACCESS_TOKEN);

        $client->addCache(new FilesystemCachePool(
            new Filesystem(new Local(__DIR__ . '/../cache/')),
            'github'
        ));

        return $client;
    }

    public function changelog(): Changelog
    {
        $changelog = new Changelog;

        $this->commits()
            ->withoutBot()
            ->each(function (array $commit) use ($changelog) {
                $changelog->changes->push(Arr::get($commit, 'commit.message'));
                $changelog
                    ->contributors
                    ->push(Arr::get($commit, 'author'));
            });

        return $changelog;
    }
}