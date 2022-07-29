<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum TierIntervalEnumObject: string
{
    case MONTH = 'month';
    case YEAR = 'year';
    case FLEXIBLE = 'flexible';
}
