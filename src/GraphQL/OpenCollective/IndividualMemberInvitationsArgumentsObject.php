<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class IndividualMemberInvitationsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $memberAccount;
    protected AccountReferenceInputInputObject $account;
    protected array $role;

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

    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }
}
