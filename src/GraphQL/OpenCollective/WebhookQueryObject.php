<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class WebhookQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Webhook';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectLegacyId()
    {
        $this->selectField('legacyId');
        return $this;
    }

    public function selectActivityType()
    {
        $this->selectField('activityType');
        return $this;
    }

    public function selectWebhookUrl()
    {
        $this->selectField('webhookUrl');
        return $this;
    }

    public function selectAccount(WebhookAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
