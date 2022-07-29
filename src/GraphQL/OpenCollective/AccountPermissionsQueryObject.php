<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountPermissionsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'AccountPermissions';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectAddFunds(AccountPermissionsAddFundsArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('addFunds');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
