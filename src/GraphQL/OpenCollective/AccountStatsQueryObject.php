<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountStatsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'AccountStats';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectBalanceWithBlockedFunds(AccountStatsBalanceWithBlockedFundsArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('balanceWithBlockedFunds');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectBalance(AccountStatsBalanceArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('balance');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConsolidatedBalance(AccountStatsConsolidatedBalanceArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('consolidatedBalance');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMonthlySpending(AccountStatsMonthlySpendingArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('monthlySpending');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalAmountSpent(AccountStatsTotalAmountSpentArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalAmountSpent');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalAmountReceived(AccountStatsTotalAmountReceivedArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalAmountReceived');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalPaidExpenses(AccountStatsTotalPaidExpensesArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalPaidExpenses');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectYearlyBudget(AccountStatsYearlyBudgetArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('yearlyBudget');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectYearlyBudgetManaged(AccountStatsYearlyBudgetManagedArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('yearlyBudgetManaged');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalNetAmountReceived(AccountStatsTotalNetAmountReceivedArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalNetAmountReceived');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectActiveRecurringContributions()
    {
        $this->selectField('activeRecurringContributions');
        return $this;
    }
}
