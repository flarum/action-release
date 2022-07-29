<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TimeSeriesAmountQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TimeSeriesAmount';

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

    public function selectNodes(TimeSeriesAmountNodesArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountNodeQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
