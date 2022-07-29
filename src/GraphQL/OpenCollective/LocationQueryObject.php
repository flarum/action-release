<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class LocationQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Location';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectAddress()
    {
        $this->selectField('address');
        return $this;
    }

    public function selectCountry()
    {
        $this->selectField('country');
        return $this;
    }

    public function selectLat()
    {
        $this->selectField('lat');
        return $this;
    }

    public function selectLong()
    {
        $this->selectField('long');
        return $this;
    }

    public function selectStructured()
    {
        $this->selectField('structured');
        return $this;
    }
}
