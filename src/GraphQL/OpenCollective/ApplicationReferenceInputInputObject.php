<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ApplicationReferenceInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $legacyId;
    protected $clientId;

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

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }
}
