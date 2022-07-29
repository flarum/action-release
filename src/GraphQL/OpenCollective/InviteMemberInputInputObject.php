<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class InviteMemberInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $memberAccount;
    protected $memberInfo;
    protected $role;
    protected $description;
    protected $since;

    public function setMemberAccount(AccountReferenceInputInputObject $memberAccount)
    {
        $this->memberAccount = $memberAccount;
        return $this;
    }

    public function setMemberInfo(IndividualCreateInputInputObject $memberInfo)
    {
        $this->memberInfo = $memberInfo;
        return $this;
    }

    public function setRole(MemberRoleEnumObjectInputObject $role)
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
