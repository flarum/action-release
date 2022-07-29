<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AmountQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Amount';

    public function selectValue()
    {
        $this->selectField('value');
        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField('currency');
        return $this;
    }

    public function selectValueInCents()
    {
        $this->selectField('valueInCents');
        return $this;
    }

    public function selectExchangeRate(AmountExchangeRateArgumentsObject $argsObject = null)
    {
        $object = new CurrencyExchangeRateQueryObject('exchangeRate');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
