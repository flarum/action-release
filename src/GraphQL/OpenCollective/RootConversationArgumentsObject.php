<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootConversationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $id;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
