<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountStatsTotalPaidExpensesArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $expenseType;
    protected \datetime $dateTo;
    protected \datetime $dateFrom;
    protected CurrencyEnumObject $currency;

    public function setExpenseType(array $expenseType)
    {
        $this->expenseType = $expenseType;
        return $this;
    }

    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    public function setCurrency(CurrencyEnumObject $currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
