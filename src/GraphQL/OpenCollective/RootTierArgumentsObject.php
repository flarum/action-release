<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootTierArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected TierReferenceInputInputObject $tier;
    protected bool $throwIfMissing;

    public function setTier(TierReferenceInputInputObject $tier)
    {
        $this->tier = $tier;
        return $this;
    }

    public function setThrowIfMissing($throwIfMissing)
    {
        $this->throwIfMissing = $throwIfMissing;
        return $this;
    }
}
