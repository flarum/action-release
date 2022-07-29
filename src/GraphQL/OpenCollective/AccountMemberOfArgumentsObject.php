<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountMemberOfArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected array $role;
    protected bool $isApproved;
    protected bool $isArchived;
    protected array $accountType;
    protected AccountReferenceInputInputObject $account;
    protected OrderByInputInputObject $orderBy;
    protected bool $orderByRoles;

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

    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;
        return $this;
    }

    public function setIsArchived($isArchived)
    {
        $this->isArchived = $isArchived;
        return $this;
    }

    public function setAccountType(array $accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setOrderBy(OrderByInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    public function setOrderByRoles($orderByRoles)
    {
        $this->orderByRoles = $orderByRoles;
        return $this;
    }
}
