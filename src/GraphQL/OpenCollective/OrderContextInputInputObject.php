<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderContextInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $isEmbed;

    public function setIsEmbed($isEmbed)
    {
        $this->isEmbed = $isEmbed;
        return $this;
    }
}
