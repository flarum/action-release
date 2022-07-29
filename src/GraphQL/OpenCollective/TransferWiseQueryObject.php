<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransferWiseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TransferWise';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectRequiredFields(TransferWiseRequiredFieldsArgumentsObject $argsObject = null)
    {
        $object = new TransferWiseRequiredFieldQueryObject('requiredFields');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAvailableCurrencies()
    {
        $this->selectField('availableCurrencies');
        return $this;
    }
}
