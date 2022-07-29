<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRejectTransactionArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected TransactionReferenceInputInputObject $transaction;
    protected string $message;

    public function setTransaction(TransactionReferenceInputInputObject $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
