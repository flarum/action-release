<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCancelOrderArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OrderReferenceInputInputObject $order;
    protected string $reason;
    protected string $reasonCode;

    public function setOrder(OrderReferenceInputInputObject $order)
    {
        $this->order = $order;
        return $this;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }
}
