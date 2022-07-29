<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum TransactionTypeEnumObject: string
{
    case DEBIT = 'DEBIT';
    case CREDIT = 'CREDIT';
}
