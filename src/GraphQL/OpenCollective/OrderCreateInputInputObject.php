<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $quantity;
    protected $amount;
    protected $frequency;
    protected $fromAccount;
    protected $fromAccountInfo;
    protected $toAccount;
    protected $guestInfo;
    protected $paymentMethod;
    protected $platformTipAmount;
    protected $taxes;
    protected $tier;
    protected $data;
    protected $customData;
    protected $context;
    protected $isBalanceTransfer;
    protected $tags;

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setAmount(AmountInputInputObject $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setFrequency(ContributionFrequencyEnumObjectInputObject $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function setFromAccount(AccountReferenceInputInputObject $fromAccount)
    {
        $this->fromAccount = $fromAccount;
        return $this;
    }

    public function setFromAccountInfo(OrderFromAccountInfoInputObject $fromAccountInfo)
    {
        $this->fromAccountInfo = $fromAccountInfo;
        return $this;
    }

    public function setToAccount(AccountReferenceInputInputObject $toAccount)
    {
        $this->toAccount = $toAccount;
        return $this;
    }

    public function setGuestInfo(GuestInfoInputInputObject $guestInfo)
    {
        $this->guestInfo = $guestInfo;
        return $this;
    }

    public function setPaymentMethod(PaymentMethodInputInputObject $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function setPlatformTipAmount(AmountInputInputObject $platformTipAmount)
    {
        $this->platformTipAmount = $platformTipAmount;
        return $this;
    }

    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    public function setTier(TierReferenceInputInputObject $tier)
    {
        $this->tier = $tier;
        return $this;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function setCustomData($customData)
    {
        $this->customData = $customData;
        return $this;
    }

    public function setContext(OrderContextInputInputObject $context)
    {
        $this->context = $context;
        return $this;
    }

    public function setIsBalanceTransfer($isBalanceTransfer)
    {
        $this->isBalanceTransfer = $isBalanceTransfer;
        return $this;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }
}
