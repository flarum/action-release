<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootDeleteVirtualCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected VirtualCardReferenceInputInputObject $virtualCard;

    public function setVirtualCard(VirtualCardReferenceInputInputObject $virtualCard)
    {
        $this->virtualCard = $virtualCard;
        return $this;
    }
}
