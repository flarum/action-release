<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum TimeUnitEnumObject: string
{
    case SECOND = 'SECOND';
    case MINUTE = 'MINUTE';
    case HOUR = 'HOUR';
    case DAY = 'DAY';
    case WEEK = 'WEEK';
    case MONTH = 'MONTH';
    case YEAR = 'YEAR';
}
