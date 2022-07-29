<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAssignNewVirtualCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected VirtualCardInputInputObject $virtualCard;
    protected AccountReferenceInputInputObject $account;
    protected AccountReferenceInputInputObject $assignee;

    public function setVirtualCard(VirtualCardInputInputObject $virtualCard)
    {
        $this->virtualCard = $virtualCard;
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
