<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class EventMembersArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected array $role;
    protected array $accountType;
    protected \emailaddress $email;
    protected ChronologicalOrderInputInputObject $orderBy;

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

    public function setAccountType(array $accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setOrderBy(ChronologicalOrderInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }
}
