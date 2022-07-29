<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateEventArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected EventCreateInputInputObject $event;
    protected AccountReferenceInputInputObject $account;

    public function setEvent(EventCreateInputInputObject $event)
    {
        $this->event = $event;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
