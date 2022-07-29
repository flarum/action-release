<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootBanAccountArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $account;
    protected bool $includeAssociatedAccounts;
    protected bool $dryRun;

    public function setAccount(array $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setIncludeAssociatedAccounts($includeAssociatedAccounts)
    {
        $this->includeAssociatedAccounts = $includeAssociatedAccounts;
        return $this;
    }

    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
        return $this;
    }
}
