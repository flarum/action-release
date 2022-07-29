<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ProjectMemberOfArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected array $role;
    protected array $accountType;
    protected AccountReferenceInputInputObject $account;
    protected bool $isHostAccount;
    protected bool $isApproved;
    protected bool $isArchived;
    protected bool $includeIncognito;
    protected string $searchTerm;
    protected HostFeeStructureEnumObject $hostFeesStructure;
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

    public function setIsHostAccount($isHostAccount)
    {
        $this->isHostAccount = $isHostAccount;
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

    public function setIncludeIncognito($includeIncognito)
    {
        $this->includeIncognito = $includeIncognito;
        return $this;
    }

    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }

    public function setHostFeesStructure(HostFeeStructureEnumObject $hostFeesStructure)
    {
        $this->hostFeesStructure = $hostFeesStructure;
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
