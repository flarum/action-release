<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransactionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Transaction';

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }
    public function selectAmount()
    {
        $this->selectField('amount');
        return $this;
    }
}