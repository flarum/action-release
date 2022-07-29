<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransactionRelatedTransactionsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $kind;

    public function setKind(array $kind)
    {
        $this->kind = $kind;
        return $this;
    }
}
