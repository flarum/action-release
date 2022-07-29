<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class VirtualCardCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'VirtualCardCollection';

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

    public function selectNodes(VirtualCardCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
