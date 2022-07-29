<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRequestVirtualCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $notes;
    protected string $purpose;
    protected int $budget;
    protected AccountReferenceInputInputObject $account;

    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    public function setBudget($budget)
    {
        $this->budget = $budget;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
