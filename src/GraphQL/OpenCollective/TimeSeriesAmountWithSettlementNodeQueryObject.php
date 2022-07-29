<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TimeSeriesAmountWithSettlementNodeQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TimeSeriesAmountWithSettlementNode';

    public function selectDate()
    {
        $this->selectField('date');
        return $this;
    }

    public function selectAmount(TimeSeriesAmountWithSettlementNodeAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('amount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSettlementStatus()
    {
        $this->selectField('settlementStatus');
        return $this;
    }
}
