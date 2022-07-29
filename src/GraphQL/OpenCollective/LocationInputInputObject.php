<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class LocationInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $name;
    protected $address;
    protected $country;
    protected $lat;
    protected $long;
    protected $structured;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function setCountry(CountryISOEnumObjectInputObject $country)
    {
        $this->country = $country;
        return $this;
    }

    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

    public function setStructured($structured)
    {
        $this->structured = $structured;
        return $this;
    }
}
