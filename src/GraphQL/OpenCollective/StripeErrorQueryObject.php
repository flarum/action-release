<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class StripeErrorQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'StripeError';

    public function selectMessage()
    {
        $this->selectField('message');
        return $this;
    }

    public function selectAccount()
    {
        $this->selectField('account');
        return $this;
    }

    public function selectResponse()
    {
        $this->selectField('response');
        return $this;
    }
}
