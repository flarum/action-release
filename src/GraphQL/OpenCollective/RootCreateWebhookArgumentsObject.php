<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateWebhookArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected WebhookCreateInputInputObject $webhook;

    public function setWebhook(WebhookCreateInputInputObject $webhook)
    {
        $this->webhook = $webhook;
        return $this;
    }
}
