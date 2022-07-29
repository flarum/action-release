<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderFromAccountInfoInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $location;
    protected $name;
    protected $legalName;

    public function setLocation(LocationInputInputObject $location)
    {
        $this->location = $location;
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
}
