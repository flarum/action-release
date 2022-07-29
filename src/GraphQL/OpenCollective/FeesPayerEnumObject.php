<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum FeesPayerEnumObject: string
{
    case COLLECTIVE = 'COLLECTIVE';
    case PAYEE = 'PAYEE';
}
