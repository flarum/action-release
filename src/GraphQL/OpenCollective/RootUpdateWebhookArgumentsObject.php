<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootUpdateWebhookArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected WebhookUpdateInputInputObject $webhook;

    public function setWebhook(WebhookUpdateInputInputObject $webhook)
    {
        $this->webhook = $webhook;
        return $this;
    }
}
