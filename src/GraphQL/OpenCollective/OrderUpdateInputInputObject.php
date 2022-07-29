<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderUpdateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $legacyId;
    protected $amount;
    protected $paymentProcessorFee;
    protected $platformTip;
    protected $hostFeePercent;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setLegacyId($legacyId)
    {
        $this->legacyId = $legacyId;
        return $this;
    }

    public function setAmount(AmountInputInputObject $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setPaymentProcessorFee(AmountInputInputObject $paymentProcessorFee)
    {
        $this->paymentProcessorFee = $paymentProcessorFee;
        return $this;
    }

    public function setPlatformTip(AmountInputInputObject $platformTip)
    {
        $this->platformTip = $platformTip;
        return $this;
    }

    public function setHostFeePercent($hostFeePercent)
    {
        $this->hostFeePercent = $hostFeePercent;
        return $this;
    }
}
