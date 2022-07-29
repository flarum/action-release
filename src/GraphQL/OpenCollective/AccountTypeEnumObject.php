<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum AccountTypeEnumObject: string
{
    case BOT = 'BOT';
    case COLLECTIVE = 'COLLECTIVE';
    case EVENT = 'EVENT';
    case FUND = 'FUND';
    case INDIVIDUAL = 'INDIVIDUAL';
    case ORGANIZATION = 'ORGANIZATION';
    case PROJECT = 'PROJECT';
    case VENDOR = 'VENDOR';
}
