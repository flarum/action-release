<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ChronologicalOrderInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $field;
    protected $direction;

    public function setField(DateTimeFieldEnumObjectInputObject $field)
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
