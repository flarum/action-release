<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum TierTypeEnumObject: string
{
    case TIER = 'TIER';
    case MEMBERSHIP = 'MEMBERSHIP';
    case DONATION = 'DONATION';
    case TICKET = 'TICKET';
    case SERVICE = 'SERVICE';
    case PRODUCT = 'PRODUCT';
}
