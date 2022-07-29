<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CreditCardWithStripeErrorQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'CreditCardWithStripeError';

    public function selectPaymentMethod(CreditCardWithStripeErrorPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new PaymentMethodQueryObject('paymentMethod');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectStripeError(CreditCardWithStripeErrorStripeErrorArgumentsObject $argsObject = null)
    {
        $object = new StripeErrorQueryObject('stripeError');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
