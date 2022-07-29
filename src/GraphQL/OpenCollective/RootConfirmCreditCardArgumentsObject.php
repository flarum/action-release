<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootConfirmCreditCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected PaymentMethodReferenceInputInputObject $paymentMethod;

    public function setPaymentMethod(PaymentMethodReferenceInputInputObject $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}
