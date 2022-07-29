<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum UpdateAudienceEnumObject: string
{
    case ALL = 'ALL';
    case COLLECTIVE_ADMINS = 'COLLECTIVE_ADMINS';
    case FINANCIAL_CONTRIBUTORS = 'FINANCIAL_CONTRIBUTORS';
    case NO_ONE = 'NO_ONE';
}
