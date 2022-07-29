<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootDeleteExpenseArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseReferenceInputInputObject $expense;

    public function setExpense(ExpenseReferenceInputInputObject $expense)
    {
        $this->expense = $expense;
        return $this;
    }
}
