<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum HostApplicationStatusEnumObject: string
{
    case PENDING = 'PENDING';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
    case EXPIRED = 'EXPIRED';
}
