<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditAccountFreezeStatusArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected AccountFreezeActionEnumObject $action;
    protected string $message;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setAction(AccountFreezeActionEnumObject $action)
    {
        $this->action = $action;
        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
