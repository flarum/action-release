<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRemovePayoutMethodArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $payoutMethodId;

    public function setPayoutMethodId($payoutMethodId)
    {
        $this->payoutMethodId = $payoutMethodId;
        return $this;
    }
}
