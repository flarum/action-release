<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum OrderByFieldTypeEnumObject: string
{
    case CREATED_AT = 'CREATED_AT';
    case MEMBER_COUNT = 'MEMBER_COUNT';
    case TOTAL_CONTRIBUTED = 'TOTAL_CONTRIBUTED';
    case ACTIVITY = 'ACTIVITY';
    case RANK = 'RANK';
}
