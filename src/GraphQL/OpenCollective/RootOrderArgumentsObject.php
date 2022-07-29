<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootOrderArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OrderReferenceInputInputObject $order;

    public function setOrder(OrderReferenceInputInputObject $order)
    {
        $this->order = $order;
        return $this;
    }
}
