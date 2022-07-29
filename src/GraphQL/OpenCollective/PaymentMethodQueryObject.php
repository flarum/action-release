<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PaymentMethodQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'PaymentMethod';

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

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectService()
    {
        $this->selectField('service');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    /**
     * @deprecated 2021-03-02: Please use service + type
     */
    public function selectProviderType()
    {
        $this->selectField('providerType');
        return $this;
    }

    public function selectBalance(PaymentMethodBalanceArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('balance');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAccount(PaymentMethodAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSourcePaymentMethod(PaymentMethodSourcePaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new PaymentMethodQueryObject('sourcePaymentMethod');
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

    public function selectLimitedToHosts(PaymentMethodLimitedToHostsArgumentsObject $argsObject = null)
    {
        $object = new HostQueryObject('limitedToHosts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectExpiryDate()
    {
        $this->selectField('expiryDate');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }
}
