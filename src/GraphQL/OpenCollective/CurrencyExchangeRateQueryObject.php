<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CurrencyExchangeRateQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'CurrencyExchangeRate';

    public function selectValue()
    {
        $this->selectField('value');
        return $this;
    }

    public function selectSource()
    {
        $this->selectField('source');
        return $this;
    }

    public function selectFromCurrency()
    {
        $this->selectField('fromCurrency');
        return $this;
    }

    public function selectToCurrency()
    {
        $this->selectField('toCurrency');
        return $this;
    }

    public function selectDate()
    {
        $this->selectField('date');
        return $this;
    }

    public function selectIsApproximate()
    {
        $this->selectField('isApproximate');
        return $this;
    }
}
