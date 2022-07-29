<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseQuoteQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ExpenseQuote';

    public function selectTotalAmount(ExpenseQuoteTotalAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalAmount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPaymentProcessorFeeAmount(ExpenseQuotePaymentProcessorFeeAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('paymentProcessorFeeAmount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEstimatedDeliveryAt()
    {
        $this->selectField('estimatedDeliveryAt');
        return $this;
    }
}
