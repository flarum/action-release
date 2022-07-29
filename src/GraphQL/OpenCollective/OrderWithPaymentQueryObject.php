<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderWithPaymentQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'OrderWithPayment';

    public function selectOrder(OrderWithPaymentOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject('order');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectGuestToken()
    {
        $this->selectField('guestToken');
        return $this;
    }

    public function selectStripeError(OrderWithPaymentStripeErrorArgumentsObject $argsObject = null)
    {
        $object = new StripeErrorQueryObject('stripeError');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
