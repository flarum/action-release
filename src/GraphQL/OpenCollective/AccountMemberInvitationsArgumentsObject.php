<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountMemberInvitationsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $role;

    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }
}
