<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum RecurringExpenseIntervalEnumObject: string
{
    case DAY = 'day';
    case WEEK = 'week';
    case MONTH = 'month';
    case QUARTER = 'quarter';
    case YEAR = 'year';
}
