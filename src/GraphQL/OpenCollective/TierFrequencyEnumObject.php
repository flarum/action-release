<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum TierFrequencyEnumObject: string
{
    case MONTHLY = 'MONTHLY';
    case YEARLY = 'YEARLY';
    case ONETIME = 'ONETIME';
    case FLEXIBLE = 'FLEXIBLE';
}
