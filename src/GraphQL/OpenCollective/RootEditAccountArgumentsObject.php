<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditAccountArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountUpdateInputInputObject $account;

    public function setAccount(AccountUpdateInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
