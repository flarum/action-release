<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootResumeVirtualCardArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected VirtualCardReferenceInputInputObject $virtualCard;

    public function setVirtualCard(VirtualCardReferenceInputInputObject $virtualCard)
    {
        $this->virtualCard = $virtualCard;
        return $this;
    }
}
