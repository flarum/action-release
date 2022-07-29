<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditExpenseArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseUpdateInputInputObject $expense;
    protected string $draftKey;

    public function setExpense(ExpenseUpdateInputInputObject $expense)
    {
        $this->expense = $expense;
        return $this;
    }

    public function setDraftKey($draftKey)
    {
        $this->draftKey = $draftKey;
        return $this;
    }
}
