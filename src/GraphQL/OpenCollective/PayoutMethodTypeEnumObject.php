<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum PayoutMethodTypeEnumObject: string
{
    case OTHER = 'OTHER';
    case PAYPAL = 'PAYPAL';
    case BANK_ACCOUNT = 'BANK_ACCOUNT';
    case ACCOUNT_BALANCE = 'ACCOUNT_BALANCE';
    case CREDIT_CARD = 'CREDIT_CARD';
}
