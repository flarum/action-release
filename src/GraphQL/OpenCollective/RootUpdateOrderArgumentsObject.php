<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootUpdateOrderArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OrderReferenceInputInputObject $order;
    protected PaymentMethodReferenceInputInputObject $paymentMethod;
    protected string $paypalSubscriptionId;
    protected TierReferenceInputInputObject $tier;
    protected AmountInputInputObject $amount;

    public function setOrder(OrderReferenceInputInputObject $order)
    {
        $this->order = $order;
        return $this;
    }

    public function setPaymentMethod(PaymentMethodReferenceInputInputObject $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function setPaypalSubscriptionId($paypalSubscriptionId)
    {
        $this->paypalSubscriptionId = $paypalSubscriptionId;
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
}
