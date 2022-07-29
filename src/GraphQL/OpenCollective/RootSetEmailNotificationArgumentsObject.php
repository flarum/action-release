<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootSetEmailNotificationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ActivityAndClassesTypeEnumObject $type;
    protected AccountReferenceInputInputObject $account;
    protected bool $active;

    public function setType(ActivityAndClassesTypeEnumObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}
