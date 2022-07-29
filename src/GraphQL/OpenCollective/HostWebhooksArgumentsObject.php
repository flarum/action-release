<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostWebhooksArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected AccountReferenceInputInputObject $account;

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

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
