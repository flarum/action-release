<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAddPlatformTipToTransactionArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected TransactionReferenceInputInputObject $transaction;
    protected AmountInputInputObject $amount;

    public function setTransaction(TransactionReferenceInputInputObject $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    public function setAmount(AmountInputInputObject $amount)
    {
        $this->amount = $amount;
        return $this;
    }
}
