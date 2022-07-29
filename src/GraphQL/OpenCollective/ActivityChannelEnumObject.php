<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ActivityChannelEnumObject: string
{
    case GITTER = 'gitter';
    case SLACK = 'slack';
    case TWITTER = 'twitter';
    case WEBHOOK = 'webhook';
    case EMAIL = 'email';
}
