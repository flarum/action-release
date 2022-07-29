<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PayoutMethodInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $data;
    protected $name;
    protected $isSaved;
    protected $type;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setIsSaved($isSaved)
    {
        $this->isSaved = $isSaved;
        return $this;
    }

    public function setType(PayoutMethodTypeEnumObjectInputObject $type)
    {
        $this->type = $type;
        return $this;
    }
}
