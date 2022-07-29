<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CaptchaInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $token;
    protected $provider;

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function setProvider(CaptchaProviderEnumObjectInputObject $provider)
    {
        $this->provider = $provider;
        return $this;
    }
}
