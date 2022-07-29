<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootProcessPendingOrderArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OrderUpdateInputInputObject $order;
    protected ProcessOrderActionEnumObject $action;

    public function setOrder(OrderUpdateInputInputObject $order)
    {
        $this->order = $order;
        return $this;
    }

    public function setAction(ProcessOrderActionEnumObject $action)
    {
        $this->action = $action;
        return $this;
    }
}
