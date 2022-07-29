<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum ExpenseStatusFilterEnumObject: string
{
    case DRAFT = 'DRAFT';
    case UNVERIFIED = 'UNVERIFIED';
    case PENDING = 'PENDING';
    case INCOMPLETE = 'INCOMPLETE';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
    case PROCESSING = 'PROCESSING';
    case ERROR = 'ERROR';
    case PAID = 'PAID';
    case SCHEDULED_FOR_PAYMENT = 'SCHEDULED_FOR_PAYMENT';
    case SPAM = 'SPAM';
    case CANCELED = 'CANCELED';
    case READY_TO_PAY = 'READY_TO_PAY';
}
