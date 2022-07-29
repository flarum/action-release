<?php

namespace Flarum\Release\GraphQL\OpenCollective;

interface TransactionInterfaceObject
{
    public const OBJECT_NAME = 'Transaction';

    function selectId();

    function selectLegacyId();

    /**
     * @deprecated 2021-08-15: Use id instead.
     */
    function selectUuid();

    function selectGroup();

    function selectType();

    function selectKind();

    function selectDescription();

    function selectAmount(TransactionAmountArgumentsObject $argsObject = null);

    function selectAmountInHostCurrency(TransactionAmountInHostCurrencyArgumentsObject $argsObject = null);

    function selectHostCurrencyFxRate();

    function selectNetAmount(TransactionNetAmountArgumentsObject $argsObject = null);

    function selectNetAmountInHostCurrency(TransactionNetAmountInHostCurrencyArgumentsObject $argsObject = null);

    function selectTaxAmount(TransactionTaxAmountArgumentsObject $argsObject = null);

    function selectTaxInfo(TransactionTaxInfoArgumentsObject $argsObject = null);

    function selectPlatformFee(TransactionPlatformFeeArgumentsObject $argsObject = null);

    function selectHostFee(TransactionHostFeeArgumentsObject $argsObject = null);

    function selectPaymentProcessorFee(TransactionPaymentProcessorFeeArgumentsObject $argsObject = null);

    function selectHost(TransactionHostArgumentsObject $argsObject = null);

    function selectAccount(TransactionAccountArgumentsObject $argsObject = null);

    function selectOppositeAccount(TransactionOppositeAccountArgumentsObject $argsObject = null);

    function selectFromAccount(TransactionFromAccountArgumentsObject $argsObject = null);

    function selectToAccount(TransactionToAccountArgumentsObject $argsObject = null);

    function selectGiftCardEmitterAccount(TransactionGiftCardEmitterAccountArgumentsObject $argsObject = null);

    function selectCreatedAt();

    function selectUpdatedAt();

    function selectExpense(TransactionExpenseArgumentsObject $argsObject = null);

    function selectOrder(TransactionOrderArgumentsObject $argsObject = null);

    function selectIsRefunded();

    function selectIsRefund();

    function selectPaymentMethod(TransactionPaymentMethodArgumentsObject $argsObject = null);

    function selectPermissions(TransactionPermissionsArgumentsObject $argsObject = null);

    function selectIsOrderRejected();

    function selectRefundTransaction(TransactionRefundTransactionArgumentsObject $argsObject = null);

    function selectRelatedTransactions(TransactionRelatedTransactionsArgumentsObject $argsObject = null);

    function selectMerchantId();

    function selectBalanceInHostCurrency(TransactionBalanceInHostCurrencyArgumentsObject $argsObject = null);
}
