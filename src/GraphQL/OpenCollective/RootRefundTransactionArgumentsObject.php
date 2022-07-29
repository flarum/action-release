<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRefundTransactionArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected TransactionReferenceInputInputObject $transaction;

    public function setTransaction(TransactionReferenceInputInputObject $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }
}
