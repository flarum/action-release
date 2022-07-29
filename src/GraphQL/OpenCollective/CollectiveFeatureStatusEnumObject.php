<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum CollectiveFeatureStatusEnumObject: string
{
    case ACTIVE = 'ACTIVE';
    case AVAILABLE = 'AVAILABLE';
    case DISABLED = 'DISABLED';
    case UNSUPPORTED = 'UNSUPPORTED';
}
