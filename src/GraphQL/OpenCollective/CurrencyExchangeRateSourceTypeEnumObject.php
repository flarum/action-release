<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum CurrencyExchangeRateSourceTypeEnumObject: string
{
    case OPENCOLLECTIVE = 'OPENCOLLECTIVE';
    case PAYPAL = 'PAYPAL';
    case WISE = 'WISE';
}
