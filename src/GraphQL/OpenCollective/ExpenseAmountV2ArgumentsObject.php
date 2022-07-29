<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseAmountV2ArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseCurrencySourceEnumObject $currencySource;

    public function setCurrencySource(ExpenseCurrencySourceEnumObject $currencySource)
    {
        $this->currencySource = $currencySource;
        return $this;
    }
}
