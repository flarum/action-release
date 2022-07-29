<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ExpenseTypeEnumObject: string
{
    case INVOICE = 'INVOICE';
    case RECEIPT = 'RECEIPT';
    case FUNDING_REQUEST = 'FUNDING_REQUEST';
    case GRANT = 'GRANT';
    case UNCLASSIFIED = 'UNCLASSIFIED';
    case CHARGE = 'CHARGE';
    case SETTLEMENT = 'SETTLEMENT';
}
