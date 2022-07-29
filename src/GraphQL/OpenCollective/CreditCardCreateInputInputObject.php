<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CreditCardCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $token;
    protected $brand;
    protected $country;
    protected $expMonth;
    protected $expYear;
    protected $fullName;
    protected $funding;
    protected $zip;

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setExpMonth($expMonth)
    {
        $this->expMonth = $expMonth;
        return $this;
    }

    public function setExpYear($expYear)
    {
        $this->expYear = $expYear;
        return $this;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function setFunding($funding)
    {
        $this->funding = $funding;
        return $this;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }
}
