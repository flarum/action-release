<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Expense';

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

    public function selectLongDescription()
    {
        $this->selectField('longDescription');
        return $this;
    }

    /**
     * @deprecated 2022-02-09: Please use amountV2
     */
    public function selectAmount()
    {
        $this->selectField('amount');
        return $this;
    }

    public function selectAmountV2(ExpenseAmountV2ArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('amountV2');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTaxes(ExpenseTaxesArgumentsObject $argsObject = null)
    {
        $object = new TaxInfoQueryObject('taxes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    /**
     * @deprecated 2022-02-09: Please use amountV2
     */
    public function selectAccountCurrencyFxRate()
    {
        $this->selectField('accountCurrencyFxRate');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField('currency');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectStatus()
    {
        $this->selectField('status');
        return $this;
    }

    public function selectComments(ExpenseCommentsArgumentsObject $argsObject = null)
    {
        $object = new CommentCollectionQueryObject('comments');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAccount(ExpenseAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPayee(ExpensePayeeArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('payee');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPayeeLocation(ExpensePayeeLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject('payeeLocation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreatedByAccount(ExpenseCreatedByAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('createdByAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHost(ExpenseHostArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('host');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPayoutMethod(ExpensePayoutMethodArgumentsObject $argsObject = null)
    {
        $object = new PayoutMethodQueryObject('payoutMethod');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVirtualCard(ExpenseVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardQueryObject('virtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAttachedFiles(ExpenseAttachedFilesArgumentsObject $argsObject = null)
    {
        $object = new ExpenseAttachedFileQueryObject('attachedFiles');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    /**
     * @deprecated 2020-04-08: Field has been renamed to "items"
     */
    public function selectAttachments(ExpenseAttachmentsArgumentsObject $argsObject = null)
    {
        $object = new ExpenseItemQueryObject('attachments');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectItems(ExpenseItemsArgumentsObject $argsObject = null)
    {
        $object = new ExpenseItemQueryObject('items');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPrivateMessage()
    {
        $this->selectField('privateMessage');
        return $this;
    }

    public function selectInvoiceInfo()
    {
        $this->selectField('invoiceInfo');
        return $this;
    }

    public function selectFeesPayer()
    {
        $this->selectField('feesPayer');
        return $this;
    }

    public function selectPermissions(ExpensePermissionsArgumentsObject $argsObject = null)
    {
        $object = new ExpensePermissionsQueryObject('permissions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectActivities(ExpenseActivitiesArgumentsObject $argsObject = null)
    {
        $object = new ActivityQueryObject('activities');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTags()
    {
        $this->selectField('tags');
        return $this;
    }

    public function selectRequiredLegalDocuments()
    {
        $this->selectField('requiredLegalDocuments');
        return $this;
    }

    public function selectDraft()
    {
        $this->selectField('draft');
        return $this;
    }

    public function selectRequestedByAccount(ExpenseRequestedByAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('requestedByAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectQuote(ExpenseQuoteArgumentsObject $argsObject = null)
    {
        $object = new ExpenseQuoteQueryObject('quote');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRecurringExpense(ExpenseRecurringExpenseArgumentsObject $argsObject = null)
    {
        $object = new RecurringExpenseQueryObject('recurringExpense');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
