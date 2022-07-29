<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class IndividualTransactionsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected TransactionTypeEnumObject $type;
    protected AccountReferenceInputInputObject $fromAccount;
    protected AccountReferenceInputInputObject $host;
    protected ChronologicalOrderInputInputObject $orderBy;
    protected \datetime $dateFrom;
    protected \datetime $dateTo;
    protected string $searchTerm;
    protected bool $hasExpense;
    protected bool $hasOrder;
    protected bool $includeRegularTransactions;
    protected bool $includeIncognitoTransactions;
    protected bool $includeChildrenTransactions;
    protected bool $includeGiftCardTransactions;
    protected bool $includeDebts;
    protected array $kind;
    protected string $group;

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

    public function setType(TransactionTypeEnumObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setFromAccount(AccountReferenceInputInputObject $fromAccount)
    {
        $this->fromAccount = $fromAccount;
        return $this;
    }

    public function setHost(AccountReferenceInputInputObject $host)
    {
        $this->host = $host;
        return $this;
    }

    public function setOrderBy(ChronologicalOrderInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
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

    public function setHasExpense($hasExpense)
    {
        $this->hasExpense = $hasExpense;
        return $this;
    }

    public function setHasOrder($hasOrder)
    {
        $this->hasOrder = $hasOrder;
        return $this;
    }

    public function setIncludeRegularTransactions($includeRegularTransactions)
    {
        $this->includeRegularTransactions = $includeRegularTransactions;
        return $this;
    }

    public function setIncludeIncognitoTransactions($includeIncognitoTransactions)
    {
        $this->includeIncognitoTransactions = $includeIncognitoTransactions;
        return $this;
    }

    public function setIncludeChildrenTransactions($includeChildrenTransactions)
    {
        $this->includeChildrenTransactions = $includeChildrenTransactions;
        return $this;
    }

    public function setIncludeGiftCardTransactions($includeGiftCardTransactions)
    {
        $this->includeGiftCardTransactions = $includeGiftCardTransactions;
        return $this;
    }

    public function setIncludeDebts($includeDebts)
    {
        $this->includeDebts = $includeDebts;
        return $this;
    }

    public function setKind(array $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }
}
