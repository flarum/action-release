<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class WebhookUpdateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $legacyId;
    protected $activityType;
    protected $webhookUrl;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setLegacyId($legacyId)
    {
        $this->legacyId = $legacyId;
        return $this;
    }

    public function setActivityType(ActivityTypeEnumObjectInputObject $activityType)
    {
        $this->activityType = $activityType;
        return $this;
    }

    public function setWebhookUrl($webhookUrl)
    {
        $this->webhookUrl = $webhookUrl;
        return $this;
    }
}
