<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OAuthApplicationCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'OAuthApplicationCollection';

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

    public function selectNodes(OAuthApplicationCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ApplicationQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
