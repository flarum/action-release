<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootConfirmOrderArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OrderReferenceInputInputObject $order;
    protected string $guestToken;

    public function setOrder(OrderReferenceInputInputObject $order)
    {
        $this->order = $order;
        return $this;
    }

    public function setGuestToken($guestToken)
    {
        $this->guestToken = $guestToken;
        return $this;
    }
}
