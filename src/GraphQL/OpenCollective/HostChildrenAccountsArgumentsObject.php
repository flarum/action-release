<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostChildrenAccountsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected array $accountType;

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

    public function setAccountType(array $accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
}
