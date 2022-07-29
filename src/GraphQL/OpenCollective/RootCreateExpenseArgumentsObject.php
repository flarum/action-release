<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateExpenseArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseCreateInputInputObject $expense;
    protected AccountReferenceInputInputObject $account;
    protected RecurringExpenseInputInputObject $recurring;

    public function setExpense(ExpenseCreateInputInputObject $expense)
    {
        $this->expense = $expense;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setRecurring(RecurringExpenseInputInputObject $recurring)
    {
        $this->recurring = $recurring;
        return $this;
    }
}
