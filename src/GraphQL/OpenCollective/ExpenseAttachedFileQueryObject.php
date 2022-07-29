<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseAttachedFileQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ExpenseAttachedFile';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectUrl()
    {
        $this->selectField('url');
        return $this;
    }
}
