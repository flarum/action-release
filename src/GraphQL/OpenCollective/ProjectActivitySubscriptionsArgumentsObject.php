<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ProjectActivitySubscriptionsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ActivityChannelEnumObject $channel;

    public function setChannel(ActivityChannelEnumObject $channel)
    {
        $this->channel = $channel;
        return $this;
    }
}
