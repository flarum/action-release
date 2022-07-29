<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootDraftExpenseAndInviteUserArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseInviteDraftInputInputObject $expense;
    protected AccountReferenceInputInputObject $account;

    public function setExpense(ExpenseInviteDraftInputInputObject $expense)
    {
        $this->expense = $expense;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
