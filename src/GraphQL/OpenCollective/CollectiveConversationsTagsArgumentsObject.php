<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CollectiveConversationsTagsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}
