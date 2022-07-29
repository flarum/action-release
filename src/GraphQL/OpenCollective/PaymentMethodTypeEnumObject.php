<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum PaymentMethodTypeEnumObject: string
{
    case ALIPAY = 'ALIPAY';
    case CREDITCARD = 'CREDITCARD';
    case PREPAID = 'PREPAID';
    case PAYMENT = 'PAYMENT';
    case SUBSCRIPTION = 'SUBSCRIPTION';
    case COLLECTIVE = 'COLLECTIVE';
    case HOST = 'HOST';
    case ADAPTIVE = 'ADAPTIVE';
    case GIFTCARD = 'GIFTCARD';
    case MANUAL = 'MANUAL';
    case CRYPTO = 'CRYPTO';
}
