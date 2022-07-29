<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ActivitySubscriptionQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ActivitySubscription';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectChannel()
    {
        $this->selectField('channel');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectActive()
    {
        $this->selectField('active');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectWebhookUrl()
    {
        $this->selectField('webhookUrl');
        return $this;
    }

    public function selectAccount(ActivitySubscriptionAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectIndividual(ActivitySubscriptionIndividualArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('individual');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
