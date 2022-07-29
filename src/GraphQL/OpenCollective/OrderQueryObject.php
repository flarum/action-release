<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Order';

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

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    public function selectAmount(OrderAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('amount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalAmount(OrderTotalAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalAmount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField('quantity');
        return $this;
    }

    public function selectStatus()
    {
        $this->selectField('status');
        return $this;
    }

    public function selectFrequency()
    {
        $this->selectField('frequency');
        return $this;
    }

    public function selectNextChargeDate()
    {
        $this->selectField('nextChargeDate');
        return $this;
    }

    public function selectTier(OrderTierArgumentsObject $argsObject = null)
    {
        $object = new TierQueryObject('tier');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFromAccount(OrderFromAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('fromAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectToAccount(OrderToAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('toAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTransactions(OrderTransactionsArgumentsObject $argsObject = null)
    {
        $object = new TransactionQueryObject('transactions');
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

    public function selectUpdatedAt()
    {
        $this->selectField('updatedAt');
        return $this;
    }

    public function selectTotalDonations(OrderTotalDonationsArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalDonations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPaymentMethod(OrderPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new PaymentMethodQueryObject('paymentMethod');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPlatformTipAmount(OrderPlatformTipAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('platformTipAmount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPlatformTipEligible()
    {
        $this->selectField('platformTipEligible');
        return $this;
    }

    public function selectTags()
    {
        $this->selectField('tags');
        return $this;
    }

    public function selectTaxes(OrderTaxesArgumentsObject $argsObject = null)
    {
        $object = new OrderTaxQueryObject('taxes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMembership(OrderMembershipArgumentsObject $argsObject = null)
    {
        $object = new MemberOfQueryObject('membership');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPermissions(OrderPermissionsArgumentsObject $argsObject = null)
    {
        $object = new OrderPermissionsQueryObject('permissions');
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

    public function selectCustomData()
    {
        $this->selectField('customData');
        return $this;
    }
}
