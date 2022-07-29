<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateFundArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected FundCreateInputInputObject $fund;
    protected AccountReferenceInputInputObject $host;

    public function setFund(FundCreateInputInputObject $fund)
    {
        $this->fund = $fund;
        return $this;
    }

    public function setHost(AccountReferenceInputInputObject $host)
    {
        $this->host = $host;
        return $this;
    }
}
