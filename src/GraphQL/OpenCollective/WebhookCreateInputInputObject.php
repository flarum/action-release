<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class WebhookCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $account;
    protected $activityType;
    protected $webhookUrl;

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
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
