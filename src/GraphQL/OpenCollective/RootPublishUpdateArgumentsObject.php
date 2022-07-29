<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootPublishUpdateArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $id;
    protected UpdateAudienceEnumObject $notificationAudience;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setNotificationAudience(UpdateAudienceEnumObject $notificationAudience)
    {
        $this->notificationAudience = $notificationAudience;
        return $this;
    }
}
