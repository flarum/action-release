<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAddTwoFactorAuthTokenToIndividualArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected string $token;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
