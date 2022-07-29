<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OAuthAuthorizationCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'OAuthAuthorizationCollection';

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

    public function selectNodes(OAuthAuthorizationCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new OAuthAuthorizationQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
