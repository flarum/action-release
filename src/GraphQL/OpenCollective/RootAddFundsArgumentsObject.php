<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAddFundsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $fromAccount;
    protected AccountReferenceInputInputObject $account;
    protected TierReferenceInputInputObject $tier;
    protected AmountInputInputObject $amount;
    protected string $description;
    protected float $hostFeePercent;
    protected string $invoiceTemplate;

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

    public function setTier(TierReferenceInputInputObject $tier)
    {
        $this->tier = $tier;
        return $this;
    }

    public function setAmount(AmountInputInputObject $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setHostFeePercent($hostFeePercent)
    {
        $this->hostFeePercent = $hostFeePercent;
        return $this;
    }

    public function setInvoiceTemplate($invoiceTemplate)
    {
        $this->invoiceTemplate = $invoiceTemplate;
        return $this;
    }
}
