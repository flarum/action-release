<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseItemQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ExpenseItem';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectAmount()
    {
        $this->selectField('amount');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField('updatedAt');
        return $this;
    }

    public function selectIncurredAt()
    {
        $this->selectField('incurredAt');
        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    public function selectUrl()
    {
        $this->selectField('url');
        return $this;
    }
}
