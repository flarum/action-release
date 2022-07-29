<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountMembersArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected array $role;
    protected \emailaddress $email;
    protected array $accountType;

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setAccountType(array $accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
}
