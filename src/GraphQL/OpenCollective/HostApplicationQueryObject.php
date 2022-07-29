<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostApplicationQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'HostApplication';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectAccount(HostApplicationAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectStatus()
    {
        $this->selectField('status');
        return $this;
    }

    public function selectMessage()
    {
        $this->selectField('message');
        return $this;
    }

    public function selectCustomData()
    {
        $this->selectField('customData');
        return $this;
    }
}
