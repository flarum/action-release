<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum AccountCacheTypeEnumObject: string
{
    case CLOUDFLARE = 'CLOUDFLARE';
    case GRAPHQL_QUERIES = 'GRAPHQL_QUERIES';
    case CONTRIBUTORS = 'CONTRIBUTORS';
}
