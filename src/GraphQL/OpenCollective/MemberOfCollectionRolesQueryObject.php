<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class MemberOfCollectionRolesQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'MemberOfCollectionRoles';

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectRole()
    {
        $this->selectField('role');
        return $this;
    }
}
