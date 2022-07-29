<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'AccountCollection';

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

    public function selectNodes(AccountCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
