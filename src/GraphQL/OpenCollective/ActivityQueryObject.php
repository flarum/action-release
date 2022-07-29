<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ActivityQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Activity';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectAccount(ActivityAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectIndividual(ActivityIndividualArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('individual');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectData()
    {
        $this->selectField('data');
        return $this;
    }
}
