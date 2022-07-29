<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountConversationsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected string $tag;

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }
}
