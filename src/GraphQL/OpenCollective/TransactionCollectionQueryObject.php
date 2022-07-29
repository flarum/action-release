<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransactionCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TransactionCollection';

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

    public function selectNodes(TransactionCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new TransactionQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectKinds()
    {
        $this->selectField('kinds');
        return $this;
    }
}
