<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TierReferenceInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $legacyId;
    protected $isCustom;

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

    public function setIsCustom($isCustom)
    {
        $this->isCustom = $isCustom;
        return $this;
    }
}
