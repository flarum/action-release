<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RecurringExpenseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'RecurringExpense';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectInterval()
    {
        $this->selectField('interval');
        return $this;
    }

    public function selectAccount(RecurringExpenseAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFromAccount(RecurringExpenseFromAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('fromAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectLastDraftedAt()
    {
        $this->selectField('lastDraftedAt');
        return $this;
    }

    public function selectEndsAt()
    {
        $this->selectField('endsAt');
        return $this;
    }

    public function selectLastExpenseCreated(RecurringExpenseLastExpenseCreatedArgumentsObject $argsObject = null)
    {
        $object = new ExpenseQueryObject('lastExpenseCreated');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
