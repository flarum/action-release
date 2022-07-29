<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum TransactionSettlementStatusEnumObject: string
{
    case OWED = 'OWED';
    case INVOICED = 'INVOICED';
    case SETTLED = 'SETTLED';
}
