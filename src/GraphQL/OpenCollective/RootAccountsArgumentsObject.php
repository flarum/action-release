<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAccountsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected string $searchTerm;
    protected array $tag;
    protected array $type;
    protected bool $isHost;
    protected bool $isActive;
    protected bool $hasCustomContributionsEnabled;
    protected bool $skipRecentAccounts;
    protected array $country;
    protected OrderByInputInputObject $orderBy;

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

    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }

    public function setTag(array $tag)
    {
        $this->tag = $tag;
        return $this;
    }

    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setIsHost($isHost)
    {
        $this->isHost = $isHost;
        return $this;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function setHasCustomContributionsEnabled($hasCustomContributionsEnabled)
    {
        $this->hasCustomContributionsEnabled = $hasCustomContributionsEnabled;
        return $this;
    }

    public function setSkipRecentAccounts($skipRecentAccounts)
    {
        $this->skipRecentAccounts = $skipRecentAccounts;
        return $this;
    }

    public function setCountry(array $country)
    {
        $this->country = $country;
        return $this;
    }

    public function setOrderBy(OrderByInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }
}
