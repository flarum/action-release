<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ApplicationTypeEnumObject: string
{
    case API_KEY = 'API_KEY';
    case OAUTH = 'OAUTH';
}
