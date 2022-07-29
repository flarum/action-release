<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum AccountFreezeActionEnumObject: string
{
    case FREEZE = 'FREEZE';
    case UNFREEZE = 'UNFREEZE';
}
