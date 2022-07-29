<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditAccountFeeStructureArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected float $hostFeePercent;
    protected bool $isCustomFee;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setHostFeePercent($hostFeePercent)
    {
        $this->hostFeePercent = $hostFeePercent;
        return $this;
    }

    public function setIsCustomFee($isCustomFee)
    {
        $this->isCustomFee = $isCustomFee;
        return $this;
    }
}
