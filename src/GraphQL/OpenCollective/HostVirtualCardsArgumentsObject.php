<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostVirtualCardsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected string $state;
    protected AccountReferenceInputInputObject $merchantAccount;
    protected \datetime $dateFrom;
    protected \datetime $dateTo;
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

    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    public function setMerchantAccount(AccountReferenceInputInputObject $merchantAccount)
    {
        $this->merchantAccount = $merchantAccount;
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

    public function setOrderBy(ChronologicalOrderInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }
}
