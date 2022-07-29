<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ApplicationCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $type;
    protected $name;
    protected $description;
    protected $redirectUri;
    protected $account;

    public function setType(ApplicationTypeEnumObjectInputObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
