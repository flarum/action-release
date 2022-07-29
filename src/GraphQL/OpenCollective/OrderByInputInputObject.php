<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderByInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $field;
    protected $direction;

    public function setField(OrderByFieldTypeEnumObjectInputObject $field)
    {
        $this->field = $field;
        return $this;
    }

    public function setDirection(OrderDirectionEnumObjectInputObject $direction)
    {
        $this->direction = $direction;
        return $this;
    }
}
