<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ContributorRoleEnumObject: string
{
    case HOST = 'HOST';
    case ADMIN = 'ADMIN';
    case MEMBER = 'MEMBER';
    case CONTRIBUTOR = 'CONTRIBUTOR';
    case BACKER = 'BACKER';
    case FUNDRAISER = 'FUNDRAISER';
    case ATTENDEE = 'ATTENDEE';
    case FOLLOWER = 'FOLLOWER';
    case CONNECTED_COLLECTIVE = 'CONNECTED_COLLECTIVE';
    case ACCOUNTANT = 'ACCOUNTANT';
}
