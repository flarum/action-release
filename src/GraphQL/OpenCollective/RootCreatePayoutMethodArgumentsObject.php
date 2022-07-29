<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreatePayoutMethodArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected PayoutMethodInputInputObject $payoutMethod;
    protected AccountReferenceInputInputObject $account;

    public function setPayoutMethod(PayoutMethodInputInputObject $payoutMethod)
    {
        $this->payoutMethod = $payoutMethod;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
