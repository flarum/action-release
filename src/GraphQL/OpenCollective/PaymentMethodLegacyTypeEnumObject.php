<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum PaymentMethodLegacyTypeEnumObject: string
{
    case ALIPAY = 'ALIPAY';
    case CREDIT_CARD = 'CREDIT_CARD';
    case GIFT_CARD = 'GIFT_CARD';
    case PREPAID_BUDGET = 'PREPAID_BUDGET';
    case ACCOUNT_BALANCE = 'ACCOUNT_BALANCE';
    case PAYPAL = 'PAYPAL';
    case BANK_TRANSFER = 'BANK_TRANSFER';
    case ADDED_FUNDS = 'ADDED_FUNDS';
    case CRYPTO = 'CRYPTO';
}
