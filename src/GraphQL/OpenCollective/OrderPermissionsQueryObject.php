<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderPermissionsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'OrderPermissions';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectCanMarkAsExpired()
    {
        $this->selectField('canMarkAsExpired');
        return $this;
    }

    public function selectCanMarkAsPaid()
    {
        $this->selectField('canMarkAsPaid');
        return $this;
    }
}
