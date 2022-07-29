<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootProcessExpenseArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ExpenseReferenceInputInputObject $expense;
    protected ExpenseProcessActionEnumObject $action;
    protected string $message;
    protected ProcessExpensePaymentParamsInputObject $paymentParams;

    public function setExpense(ExpenseReferenceInputInputObject $expense)
    {
        $this->expense = $expense;
        return $this;
    }

    public function setAction(ExpenseProcessActionEnumObject $action)
    {
        $this->action = $action;
        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function setPaymentParams(ProcessExpensePaymentParamsInputObject $paymentParams)
    {
        $this->paymentParams = $paymentParams;
        return $this;
    }
}
