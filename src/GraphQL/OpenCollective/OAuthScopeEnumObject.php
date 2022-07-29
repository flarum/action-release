<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum OAuthScopeEnumObject: string
{
    case EMAIL = 'email';
    case INCOGNITO = 'incognito';
    case ACCOUNT = 'account';
    case EXPENSES = 'expenses';
    case ORDERS = 'orders';
    case TRANSACTIONS = 'transactions';
    case VIRTUALCARDS = 'virtualCards';
    case UPDATES = 'updates';
    case CONVERSATIONS = 'conversations';
    case WEBHOOKS = 'webhooks';
    case HOST = 'host';
    case APPLICATIONS = 'applications';
    case CONNECTEDACCOUNTS = 'connectedAccounts';
    case ROOT = 'root';
}
