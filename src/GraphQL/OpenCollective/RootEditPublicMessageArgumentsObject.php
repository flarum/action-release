<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditPublicMessageArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $fromAccount;
    protected AccountReferenceInputInputObject $toAccount;
    protected string $message;

    public function setFromAccount(AccountReferenceInputInputObject $fromAccount)
    {
        $this->fromAccount = $fromAccount;
        return $this;
    }

    public function setToAccount(AccountReferenceInputInputObject $toAccount)
    {
        $this->toAccount = $toAccount;
        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
