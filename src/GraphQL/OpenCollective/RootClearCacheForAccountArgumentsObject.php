<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootClearCacheForAccountArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected array $type;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }
}
