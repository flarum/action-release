<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ExpenseCurrencySourceEnumObject: string
{
    case HOST = 'HOST';
    case ACCOUNT = 'ACCOUNT';
    case EXPENSE = 'EXPENSE';
}
