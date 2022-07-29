<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootMergeAccountsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $fromAccount;
    protected AccountReferenceInputInputObject $toAccount;
    protected bool $dryRun;

    public function setFromAccount(AccountReferenceInputInputObject $fromAccount)
    {
        $this->fromAccount = $fromAccount;
        return $this;
    }

    public function setToAccount(AccountReferenceInputInputObject $toAccount)
    {
        $this->toAccount = $toAccount;
        return $this;
    }

    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
        return $this;
    }
}
