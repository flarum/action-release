<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootTagStatsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $searchTerm;
    protected int $limit;
    protected int $offset;

    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }

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
