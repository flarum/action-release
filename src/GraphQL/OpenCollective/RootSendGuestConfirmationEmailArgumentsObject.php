<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootSendGuestConfirmationEmailArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected \emailaddress $email;

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
