<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class MemberQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Member';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectRole()
    {
        $this->selectField('role');
        return $this;
    }

    public function selectTier(MemberTierArgumentsObject $argsObject = null)
    {
        $object = new TierQueryObject('tier');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
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

    public function selectSince()
    {
        $this->selectField('since');
        return $this;
    }

    public function selectTotalDonations(MemberTotalDonationsArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalDonations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPublicMessage()
    {
        $this->selectField('publicMessage');
        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    public function selectAccount(MemberAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
