<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateMemberArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $memberAccount;
    protected AccountReferenceInputInputObject $account;
    protected MemberRoleEnumObject $role;
    protected string $description;
    protected \datetime $since;

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

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setSince($since)
    {
        $this->since = $since;
        return $this;
    }
}
