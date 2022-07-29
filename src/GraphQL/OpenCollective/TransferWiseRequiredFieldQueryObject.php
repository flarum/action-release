<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransferWiseRequiredFieldQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TransferWiseRequiredField';

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectTitle()
    {
        $this->selectField('title');
        return $this;
    }

    public function selectFields(TransferWiseRequiredFieldFieldsArgumentsObject $argsObject = null)
    {
        $object = new TransferWiseFieldQueryObject('fields');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
