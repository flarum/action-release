<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ConnectedAccountServiceEnumObject: string
{
    case PAYPAL = 'paypal';
    case STRIPE = 'stripe';
    case GITHUB = 'github';
    case TWITTER = 'twitter';
    case TRANSFERWISE = 'transferwise';
    case PRIVACY = 'privacy';
    case THEGIVINGBLOCK = 'thegivingblock';
}
