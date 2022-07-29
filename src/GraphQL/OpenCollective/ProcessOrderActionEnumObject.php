<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ProcessOrderActionEnumObject: string
{
    case MARK_AS_EXPIRED = 'MARK_AS_EXPIRED';
    case MARK_AS_PAID = 'MARK_AS_PAID';
}
