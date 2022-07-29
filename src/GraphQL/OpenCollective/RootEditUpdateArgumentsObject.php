<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditUpdateArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected UpdateUpdateInputInputObject $update;

    public function setUpdate(UpdateUpdateInputInputObject $update)
    {
        $this->update = $update;
        return $this;
    }
}
