<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PaypalPaymentInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $token;
    protected $data;
    protected $orderId;
    protected $subscriptionId;

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }
}
