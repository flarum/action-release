<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootDeleteConnectedAccountArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ConnectedAccountReferenceInputInputObject $connectedAccount;

    public function setConnectedAccount(ConnectedAccountReferenceInputInputObject $connectedAccount)
    {
        $this->connectedAccount = $connectedAccount;
        return $this;
    }
}
