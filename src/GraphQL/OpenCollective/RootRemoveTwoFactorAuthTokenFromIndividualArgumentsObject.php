<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRemoveTwoFactorAuthTokenFromIndividualArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected string $code;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}
