<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ProcessHostApplicationActionEnumObject: string
{
    case APPROVE = 'APPROVE';
    case REJECT = 'REJECT';
    case SEND_PRIVATE_MESSAGE = 'SEND_PRIVATE_MESSAGE';
    case SEND_PUBLIC_MESSAGE = 'SEND_PUBLIC_MESSAGE';
}
