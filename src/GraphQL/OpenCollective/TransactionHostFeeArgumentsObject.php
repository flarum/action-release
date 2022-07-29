<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransactionHostFeeArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected bool $fetchHostFee;

    public function setFetchHostFee($fetchHostFee)
    {
        $this->fetchHostFee = $fetchHostFee;
        return $this;
    }
}
