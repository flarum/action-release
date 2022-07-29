<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransferWiseRequiredFieldsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $currency;
    protected \json $accountDetails;

    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function setAccountDetails($accountDetails)
    {
        $this->accountDetails = $accountDetails;
        return $this;
    }
}
