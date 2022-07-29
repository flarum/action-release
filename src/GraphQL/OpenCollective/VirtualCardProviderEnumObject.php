<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum VirtualCardProviderEnumObject: string
{
    case PRIVACY = 'PRIVACY';
    case STRIPE = 'STRIPE';
}
