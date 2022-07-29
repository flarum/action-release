<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PayoutMethodQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'PayoutMethod';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectIsSaved()
    {
        $this->selectField('isSaved');
        return $this;
    }

    public function selectData()
    {
        $this->selectField('data');
        return $this;
    }
}
