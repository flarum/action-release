<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum PaymentMethodServiceEnumObject: string
{
    case PAYPAL = 'PAYPAL';
    case STRIPE = 'STRIPE';
    case OPENCOLLECTIVE = 'OPENCOLLECTIVE';
    case PREPAID = 'PREPAID';
    case THEGIVINGBLOCK = 'THEGIVINGBLOCK';
}
