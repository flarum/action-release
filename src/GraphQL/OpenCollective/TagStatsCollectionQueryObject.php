<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TagStatsCollectionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TagStatsCollection';

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

    public function selectNodes(TagStatsCollectionNodesArgumentsObject $argsObject = null)
    {
        $object = new TagStatQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
