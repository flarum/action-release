<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PaymentMethodReferenceInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
