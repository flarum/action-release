<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderReferenceInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $legacyId;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setLegacyId($legacyId)
    {
        $this->legacyId = $legacyId;
        return $this;
    }
}
