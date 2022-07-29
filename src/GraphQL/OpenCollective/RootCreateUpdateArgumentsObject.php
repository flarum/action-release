<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateUpdateArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected UpdateCreateInputInputObject $update;

    public function setUpdate(UpdateCreateInputInputObject $update)
    {
        $this->update = $update;
        return $this;
    }
}
