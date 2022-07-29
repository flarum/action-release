<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TimeSeriesAmountNodeQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TimeSeriesAmountNode';

    public function selectDate()
    {
        $this->selectField('date');
        return $this;
    }

    public function selectAmount(TimeSeriesAmountNodeAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('amount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
