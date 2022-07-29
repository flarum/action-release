<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateConnectedAccountArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ConnectedAccountCreateInputInputObject $connectedAccount;
    protected AccountReferenceInputInputObject $account;

    public function setConnectedAccount(ConnectedAccountCreateInputInputObject $connectedAccount)
    {
        $this->connectedAccount = $connectedAccount;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
