<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderTaxQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'OrderTax';

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectPercentage()
    {
        $this->selectField('percentage');
        return $this;
    }
}
