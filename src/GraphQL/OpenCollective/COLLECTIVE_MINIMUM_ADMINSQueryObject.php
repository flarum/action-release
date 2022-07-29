<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class COLLECTIVE_MINIMUM_ADMINSQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'COLLECTIVE_MINIMUM_ADMINS';

    public function selectNumberOfAdmins()
    {
        $this->selectField('numberOfAdmins');
        return $this;
    }

    public function selectApplies()
    {
        $this->selectField('applies');
        return $this;
    }

    public function selectFreeze()
    {
        $this->selectField('freeze');
        return $this;
    }
}
