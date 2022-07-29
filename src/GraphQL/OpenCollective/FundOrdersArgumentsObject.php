<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class FundOrdersArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected bool $includeHostedAccounts;
    protected bool $includeIncognito;
    protected AccountOrdersFilterEnumObject $filter;
    protected ContributionFrequencyEnumObject $frequency;
    protected array $status;
    protected ChronologicalOrderInputInputObject $orderBy;
    protected int $minAmount;
    protected int $maxAmount;
    protected \datetime $dateFrom;
    protected \datetime $dateTo;
    protected string $searchTerm;
    protected bool $onlySubscriptions;

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

    public function setIncludeHostedAccounts($includeHostedAccounts)
    {
        $this->includeHostedAccounts = $includeHostedAccounts;
        return $this;
    }

    public function setIncludeIncognito($includeIncognito)
    {
        $this->includeIncognito = $includeIncognito;
        return $this;
    }

    public function setFilter(AccountOrdersFilterEnumObject $filter)
    {
        $this->filter = $filter;
        return $this;
    }

    public function setFrequency(ContributionFrequencyEnumObject $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }

    public function setOrderBy(ChronologicalOrderInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    public function setMinAmount($minAmount)
    {
        $this->minAmount = $minAmount;
        return $this;
    }

    public function setMaxAmount($maxAmount)
    {
        $this->maxAmount = $maxAmount;
        return $this;
    }

    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }

    public function setOnlySubscriptions($onlySubscriptions)
    {
        $this->onlySubscriptions = $onlySubscriptions;
        return $this;
    }
}
