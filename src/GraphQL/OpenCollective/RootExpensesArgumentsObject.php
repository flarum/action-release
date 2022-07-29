<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootExpensesArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected AccountReferenceInputInputObject $fromAccount;
    protected AccountReferenceInputInputObject $account;
    protected AccountReferenceInputInputObject $host;
    protected ExpenseStatusFilterEnumObject $status;
    protected ExpenseTypeEnumObject $type;
    protected array $tag;
    protected ChronologicalOrderInputInputObject $orderBy;
    protected int $minAmount;
    protected int $maxAmount;
    protected PayoutMethodTypeEnumObject $payoutMethodType;
    protected \datetime $dateFrom;
    protected \datetime $dateTo;
    protected string $searchTerm;
    protected bool $includeChildrenExpenses;

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

    public function setFromAccount(AccountReferenceInputInputObject $fromAccount)
    {
        $this->fromAccount = $fromAccount;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setHost(AccountReferenceInputInputObject $host)
    {
        $this->host = $host;
        return $this;
    }

    public function setStatus(ExpenseStatusFilterEnumObject $status)
    {
        $this->status = $status;
        return $this;
    }

    public function setType(ExpenseTypeEnumObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setTag(array $tag)
    {
        $this->tag = $tag;
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

    public function setPayoutMethodType(PayoutMethodTypeEnumObject $payoutMethodType)
    {
        $this->payoutMethodType = $payoutMethodType;
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

    public function setIncludeChildrenExpenses($includeChildrenExpenses)
    {
        $this->includeChildrenExpenses = $includeChildrenExpenses;
        return $this;
    }
}
