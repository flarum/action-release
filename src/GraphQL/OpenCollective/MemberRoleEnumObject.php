<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum MemberRoleEnumObject: string
{
    case BACKER = 'BACKER';
    case ADMIN = 'ADMIN';
    case CONTRIBUTOR = 'CONTRIBUTOR';
    case HOST = 'HOST';
    case ATTENDEE = 'ATTENDEE';
    case MEMBER = 'MEMBER';
    case FUNDRAISER = 'FUNDRAISER';
    case FOLLOWER = 'FOLLOWER';
    case ACCOUNTANT = 'ACCOUNTANT';
    case CONNECTED_ACCOUNT = 'CONNECTED_ACCOUNT';
}
