<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditHostPlanArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected string $plan;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }
}
