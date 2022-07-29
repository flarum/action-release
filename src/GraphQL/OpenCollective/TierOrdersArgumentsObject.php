<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TierOrdersArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected array $status;

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

    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }
}
