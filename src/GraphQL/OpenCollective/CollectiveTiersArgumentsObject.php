<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CollectiveTiersArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;

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
}
