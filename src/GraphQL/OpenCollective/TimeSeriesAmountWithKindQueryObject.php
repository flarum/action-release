<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TimeSeriesAmountWithKindQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TimeSeriesAmountWithKind';

    public function selectDateFrom()
    {
        $this->selectField('dateFrom');
        return $this;
    }

    public function selectDateTo()
    {
        $this->selectField('dateTo');
        return $this;
    }

    public function selectTimeUnit()
    {
        $this->selectField('timeUnit');
        return $this;
    }

    public function selectNodes(TimeSeriesAmountWithKindNodesArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountWithKindNodeQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
