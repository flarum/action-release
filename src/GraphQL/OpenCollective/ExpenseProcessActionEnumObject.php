<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ExpenseProcessActionEnumObject: string
{
    case APPROVE = 'APPROVE';
    case UNAPPROVE = 'UNAPPROVE';
    case REJECT = 'REJECT';
    case MARK_AS_UNPAID = 'MARK_AS_UNPAID';
    case SCHEDULE_FOR_PAYMENT = 'SCHEDULE_FOR_PAYMENT';
    case UNSCHEDULE_PAYMENT = 'UNSCHEDULE_PAYMENT';
    case PAY = 'PAY';
    case MARK_AS_SPAM = 'MARK_AS_SPAM';
    case MARK_AS_INCOMPLETE = 'MARK_AS_INCOMPLETE';
}
