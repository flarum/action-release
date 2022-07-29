<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootProcessHostApplicationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected AccountReferenceInputInputObject $host;
    protected ProcessHostApplicationActionEnumObject $action;
    protected string $message;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setHost(AccountReferenceInputInputObject $host)
    {
        $this->host = $host;
        return $this;
    }

    public function setAction(ProcessHostApplicationActionEnumObject $action)
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
