<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum AccountOrdersFilterEnumObject: string
{
    case INCOMING = 'INCOMING';
    case OUTGOING = 'OUTGOING';
}
