<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateOrderArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OrderCreateInputInputObject $order;

    public function setOrder(OrderCreateInputInputObject $order)
    {
        $this->order = $order;
        return $this;
    }
}
