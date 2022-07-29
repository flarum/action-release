<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootExpenseArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseReferenceInputInputObject $expense;
    protected string $draftKey;

    public function setExpense(ExpenseReferenceInputInputObject $expense)
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
