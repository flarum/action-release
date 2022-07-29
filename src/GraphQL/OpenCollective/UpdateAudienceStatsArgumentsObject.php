<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class UpdateAudienceStatsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected UpdateAudienceEnumObject $audience;

    public function setAudience(UpdateAudienceEnumObject $audience)
    {
        $this->audience = $audience;
        return $this;
    }
}
