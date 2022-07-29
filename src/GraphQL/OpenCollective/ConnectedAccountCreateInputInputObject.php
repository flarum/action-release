<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ConnectedAccountCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $clientId;
    protected $data;
    protected $refreshToken;
    protected $settings;
    protected $token;
    protected $service;
    protected $username;

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    public function setSettings($settings)
    {
        $this->settings = $settings;
        return $this;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function setService(ConnectedAccountServiceEnumObjectInputObject $service)
    {
        $this->service = $service;
        return $this;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
}
