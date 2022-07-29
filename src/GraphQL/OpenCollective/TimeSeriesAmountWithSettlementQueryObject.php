<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TimeSeriesAmountWithSettlementQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TimeSeriesAmountWithSettlement';

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

    public function selectNodes(TimeSeriesAmountWithSettlementNodesArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountWithSettlementNodeQueryObject('nodes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
