<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PaymentMethodInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $service;
    protected $type;
    protected $name;
    protected $isSavedForLater;
    protected $creditCardInfo;
    protected $paypalInfo;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setService(PaymentMethodServiceEnumObjectInputObject $service)
    {
        $this->service = $service;
        return $this;
    }

    public function setType(PaymentMethodTypeEnumObjectInputObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setIsSavedForLater($isSavedForLater)
    {
        $this->isSavedForLater = $isSavedForLater;
        return $this;
    }

    public function setCreditCardInfo(CreditCardCreateInputInputObject $creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;
        return $this;
    }

    public function setPaypalInfo(PaypalPaymentInputInputObject $paypalInfo)
    {
        $this->paypalInfo = $paypalInfo;
        return $this;
    }
}
