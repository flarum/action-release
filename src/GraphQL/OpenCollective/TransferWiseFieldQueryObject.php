<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransferWiseFieldQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TransferWiseField';

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectGroup(TransferWiseFieldGroupArgumentsObject $argsObject = null)
    {
        $object = new TransferWiseFieldGroupQueryObject('group');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
