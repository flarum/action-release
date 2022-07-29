<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostHostedVirtualCardsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected string $state;
    protected ChronologicalOrderInputInputObject $orderBy;
    protected AccountReferenceInputInputObject $merchantAccount;
    protected array $collectiveAccountIds;

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

    public function setOrderBy(ChronologicalOrderInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    public function setMerchantAccount(AccountReferenceInputInputObject $merchantAccount)
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    public function setCollectiveAccountIds(array $collectiveAccountIds)
    {
        $this->collectiveAccountIds = $collectiveAccountIds;
        return $this;
    }
}
