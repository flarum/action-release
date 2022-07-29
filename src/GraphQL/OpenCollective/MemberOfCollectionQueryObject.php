<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class MemberOfCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'MemberOfCollection';

    public function selectOffset()
    {
        $this->selectField('offset');
        return $this;
    }

    public function selectLimit()
    {
        $this->selectField('limit');
        return $this;
    }

    public function selectTotalCount()
    {
        $this->selectField('totalCount');
        return $this;
    }

    public function selectNodes(MemberOfCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MemberOfQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRoles(MemberOfCollectionRolesArgumentsObject $argsObject = null)
    {
        $object = new MemberOfCollectionRolesQueryObject('roles');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
