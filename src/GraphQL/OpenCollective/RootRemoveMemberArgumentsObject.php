<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRemoveMemberArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $memberAccount;
    protected AccountReferenceInputInputObject $account;
    protected MemberRoleEnumObject $role;
    protected bool $isInvitation;

    public function setMemberAccount(AccountReferenceInputInputObject $memberAccount)
    {
        $this->memberAccount = $memberAccount;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setRole(MemberRoleEnumObject $role)
    {
        $this->role = $role;
        return $this;
    }

    public function setIsInvitation($isInvitation)
    {
        $this->isInvitation = $isInvitation;
        return $this;
    }
}
