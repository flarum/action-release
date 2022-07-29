<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootFollowConversationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $id;
    protected bool $isActive;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }
}
