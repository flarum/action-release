<?php

namespace Flarum\Release;

use Github\AuthMethod;
use Github\Client;

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

    public function lastTag(): GitHub\LastTag
    {
        return new GitHub\LastTag($this);
    }

    protected function api(): Client
    {
        $client = new Client();

        $client->authenticate($_ENV['GITHUB_TOKEN'], AuthMethod::ACCESS_TOKEN);

        return $client;
    }
}