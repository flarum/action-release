<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootUnpublishUpdateArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $id;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
