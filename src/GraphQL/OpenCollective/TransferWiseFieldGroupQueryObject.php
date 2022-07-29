<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransferWiseFieldGroupQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TransferWiseFieldGroup';

    public function selectKey()
    {
        $this->selectField('key');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectRequired()
    {
        $this->selectField('required');
        return $this;
    }

    public function selectRefreshRequirementsOnChange()
    {
        $this->selectField('refreshRequirementsOnChange');
        return $this;
    }

    public function selectDisplayFormat()
    {
        $this->selectField('displayFormat');
        return $this;
    }

    public function selectExample()
    {
        $this->selectField('example');
        return $this;
    }

    public function selectMinLength()
    {
        $this->selectField('minLength');
        return $this;
    }

    public function selectMaxLength()
    {
        $this->selectField('maxLength');
        return $this;
    }

    public function selectValidationRegexp()
    {
        $this->selectField('validationRegexp');
        return $this;
    }

    public function selectValidationAsync()
    {
        $this->selectField('validationAsync');
        return $this;
    }

    public function selectValuesAllowed(TransferWiseFieldGroupValuesAllowedArgumentsObject $argsObject = null)
    {
        $object = new TransferWiseFieldVatvkluesAllowedQueryObject('valuesAllowed');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
