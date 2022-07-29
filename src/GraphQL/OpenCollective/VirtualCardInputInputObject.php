<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class VirtualCardInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $name;
    protected $last4;
    protected $data;
    protected $privateData;
    protected $provider;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setLast4($last4)
    {
        $this->last4 = $last4;
        return $this;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function setPrivateData($privateData)
    {
        $this->privateData = $privateData;
        return $this;
    }

    public function setProvider(VirtualCardProviderEnumObjectInputObject $provider)
    {
        $this->provider = $provider;
        return $this;
    }
}
