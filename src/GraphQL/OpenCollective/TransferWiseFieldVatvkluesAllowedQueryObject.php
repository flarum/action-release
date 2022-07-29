<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransferWiseFieldVatvkluesAllowedQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TransferWiseFieldVatvkluesAllowed';

    public function selectKey()
    {
        $this->selectField('key');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }
}
