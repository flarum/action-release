<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseStatsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ExpenseStats';

    public function selectExpensesCount()
    {
        $this->selectField('expensesCount');
        return $this;
    }

    /**
     * @deprecated 2022-04-21: Please use hostMetricsTimeSeries.totalSpent
     */
    public function selectExpenseAmountOverTime(ExpenseStatsExpenseAmountOverTimeArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountQueryObject('expenseAmountOverTime');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDailyAverageAmount(ExpenseStatsDailyAverageAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('dailyAverageAmount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectInvoicesCount()
    {
        $this->selectField('invoicesCount');
        return $this;
    }

    public function selectReimbursementsCount()
    {
        $this->selectField('reimbursementsCount');
        return $this;
    }

    public function selectGrantsCount()
    {
        $this->selectField('grantsCount');
        return $this;
    }
}
