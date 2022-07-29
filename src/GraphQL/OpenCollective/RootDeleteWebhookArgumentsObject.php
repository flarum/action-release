<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootDeleteWebhookArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected WebhookReferenceInputInputObject $webhook;

    public function setWebhook(WebhookReferenceInputInputObject $webhook)
    {
        $this->webhook = $webhook;
        return $this;
    }
}
