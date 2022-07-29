<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootResendDraftExpenseInviteArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseReferenceInputInputObject $expense;

    public function setExpense(ExpenseReferenceInputInputObject $expense)
    {
        $this->expense = $expense;
        return $this;
    }
}
