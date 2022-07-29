<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditVirtualCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected VirtualCardReferenceInputInputObject $virtualCard;
    protected string $name;
    protected AccountReferenceInputInputObject $assignee;
    protected AmountInputInputObject $monthlyLimit;

    public function setVirtualCard(VirtualCardReferenceInputInputObject $virtualCard)
    {
        $this->virtualCard = $virtualCard;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAssignee(AccountReferenceInputInputObject $assignee)
    {
        $this->assignee = $assignee;
        return $this;
    }

    public function setMonthlyLimit(AmountInputInputObject $monthlyLimit)
    {
        $this->monthlyLimit = $monthlyLimit;
        return $this;
    }
}
