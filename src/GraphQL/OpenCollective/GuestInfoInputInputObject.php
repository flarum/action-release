<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class GuestInfoInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $email;
    protected $name;
    protected $legalName;
    protected $location;
    protected $captcha;

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }

    public function setLocation(LocationInputInputObject $location)
    {
        $this->location = $location;
        return $this;
    }

    public function setCaptcha(CaptchaInputInputObject $captcha)
    {
        $this->captcha = $captcha;
        return $this;
    }
}
