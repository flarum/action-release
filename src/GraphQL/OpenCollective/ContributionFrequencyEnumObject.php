<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ContributionFrequencyEnumObject: string
{
    case MONTHLY = 'MONTHLY';
    case YEARLY = 'YEARLY';
    case ONETIME = 'ONETIME';
}
