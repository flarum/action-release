<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class MemberInvitationQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'MemberInvitation';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectInviter(MemberInvitationInviterArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('inviter');
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

    public function selectAccount(MemberInvitationAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberAccount(MemberInvitationMemberAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('memberAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRole()
    {
        $this->selectField('role');
        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    public function selectTier(MemberInvitationTierArgumentsObject $argsObject = null)
    {
        $object = new TierQueryObject('tier');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSince()
    {
        $this->selectField('since');
        return $this;
    }
}
