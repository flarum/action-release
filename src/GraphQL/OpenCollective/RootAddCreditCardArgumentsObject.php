<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAddCreditCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected CreditCardCreateInputInputObject $creditCardInfo;
    protected string $name;
    protected bool $isSavedForLater;
    protected AccountReferenceInputInputObject $account;

    public function setCreditCardInfo(CreditCardCreateInputInputObject $creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setIsSavedForLater($isSavedForLater)
    {
        $this->isSavedForLater = $isSavedForLater;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
