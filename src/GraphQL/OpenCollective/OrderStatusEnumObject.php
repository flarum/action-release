<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum OrderStatusEnumObject: string
{
    case ACTIVE = 'ACTIVE';
    case CANCELLED = 'CANCELLED';
    case ERROR = 'ERROR';
    case EXPIRED = 'EXPIRED';
    case NEW = 'NEW';
    case PAID = 'PAID';
    case PENDING = 'PENDING';
    case PLEDGED = 'PLEDGED';
    case REJECTED = 'REJECTED';
    case REQUIRE_CLIENT_CONFIRMATION = 'REQUIRE_CLIENT_CONFIRMATION';
}
