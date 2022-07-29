<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class IndividualCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $name;
    protected $email;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
