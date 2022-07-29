<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class MemberCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'MemberCollection';

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

    public function selectNodes(MemberCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MemberQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
