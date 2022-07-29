<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootMoveOrdersArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $orders;
    protected AccountReferenceInputInputObject $fromAccount;
    protected TierReferenceInputInputObject $tier;
    protected bool $makeIncognito;

    public function setOrders(array $orders)
    {
        $this->orders = $orders;
        return $this;
    }

    public function setFromAccount(AccountReferenceInputInputObject $fromAccount)
    {
        $this->fromAccount = $fromAccount;
        return $this;
    }

    public function setTier(TierReferenceInputInputObject $tier)
    {
        $this->tier = $tier;
        return $this;
    }

    public function setMakeIncognito($makeIncognito)
    {
        $this->makeIncognito = $makeIncognito;
        return $this;
    }
}
