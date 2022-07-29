<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateVirtualCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $name;
    protected AmountInputInputObject $monthlyLimit;
    protected AccountReferenceInputInputObject $account;
    protected AccountReferenceInputInputObject $assignee;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setMonthlyLimit(AmountInputInputObject $monthlyLimit)
    {
        $this->monthlyLimit = $monthlyLimit;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setAssignee(AccountReferenceInputInputObject $assignee)
    {
        $this->assignee = $assignee;
        return $this;
    }
}
