<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootConfirmGuestAccountArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected \emailaddress $email;
    protected string $emailConfirmationToken;

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setEmailConfirmationToken($emailConfirmationToken)
    {
        $this->emailConfirmationToken = $emailConfirmationToken;
        return $this;
    }
}
