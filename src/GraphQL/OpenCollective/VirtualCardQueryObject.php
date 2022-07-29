<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class VirtualCardQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'VirtualCard';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectAccount(VirtualCardAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHost(VirtualCardHostArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('host');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAssignee(VirtualCardAssigneeArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('assignee');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectLast4()
    {
        $this->selectField('last4');
        return $this;
    }

    public function selectData()
    {
        $this->selectField('data');
        return $this;
    }

    public function selectPrivateData()
    {
        $this->selectField('privateData');
        return $this;
    }

    public function selectProvider()
    {
        $this->selectField('provider');
        return $this;
    }

    public function selectSpendingLimitAmount()
    {
        $this->selectField('spendingLimitAmount');
        return $this;
    }

    public function selectSpendingLimitInterval()
    {
        $this->selectField('spendingLimitInterval');
        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField('currency');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField('updatedAt');
        return $this;
    }
}
