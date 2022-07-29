<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditAccountSettingArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected \accountsettingskey $key;
    protected \json $value;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
