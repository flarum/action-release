<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TierQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Tier';

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

    public function selectSlug()
    {
        $this->selectField('slug');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    public function selectOrders(TierOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderCollectionQueryObject('orders');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAmount(TierAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('amount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    /**
     * @deprecated 2020-08-24: Please use "frequency"
     */
    public function selectInterval()
    {
        $this->selectField('interval');
        return $this;
    }

    public function selectFrequency()
    {
        $this->selectField('frequency');
        return $this;
    }

    public function selectPresets()
    {
        $this->selectField('presets');
        return $this;
    }

    public function selectMaxQuantity()
    {
        $this->selectField('maxQuantity');
        return $this;
    }

    public function selectAvailableQuantity()
    {
        $this->selectField('availableQuantity');
        return $this;
    }

    public function selectCustomFields()
    {
        $this->selectField('customFields');
        return $this;
    }

    public function selectAmountType()
    {
        $this->selectField('amountType');
        return $this;
    }

    public function selectMinimumAmount(TierMinimumAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('minimumAmount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEndsAt()
    {
        $this->selectField('endsAt');
        return $this;
    }

    public function selectInvoiceTemplate()
    {
        $this->selectField('invoiceTemplate');
        return $this;
    }
}
