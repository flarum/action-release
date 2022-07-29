<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootPaypalPlanArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $account;
    protected AmountInputInputObject $amount;
    protected ContributionFrequencyEnumObject $frequency;
    protected TierReferenceInputInputObject $tier;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setAmount(AmountInputInputObject $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setFrequency(ContributionFrequencyEnumObject $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function setTier(TierReferenceInputInputObject $tier)
    {
        $this->tier = $tier;
        return $this;
    }
}
