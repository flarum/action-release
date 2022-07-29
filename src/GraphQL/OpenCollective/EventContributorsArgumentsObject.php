<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class EventContributorsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected array $roles;

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

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        return $this;
    }
}
