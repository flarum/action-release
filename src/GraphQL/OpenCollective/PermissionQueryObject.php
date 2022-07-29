<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PermissionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Permission';

    public function selectAllowed()
    {
        $this->selectField('allowed');
        return $this;
    }

    public function selectReason()
    {
        $this->selectField('reason');
        return $this;
    }
}
