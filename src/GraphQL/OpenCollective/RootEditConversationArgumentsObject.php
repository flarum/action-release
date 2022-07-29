<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditConversationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $id;
    protected string $title;
    protected array $tags;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }
}
