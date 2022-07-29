<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TimeSeriesAmountWithKindNodeQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TimeSeriesAmountWithKindNode';

    public function selectDate()
    {
        $this->selectField('date');
        return $this;
    }

    public function selectAmount(TimeSeriesAmountWithKindNodeAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('amount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectKind()
    {
        $this->selectField('kind');
        return $this;
    }
}
