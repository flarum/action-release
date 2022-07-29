<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class BanAccountResponseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'BanAccountResponse';

    public function selectIsAllowed()
    {
        $this->selectField('isAllowed');
        return $this;
    }

    public function selectMessage()
    {
        $this->selectField('message');
        return $this;
    }

    public function selectAccounts(BanAccountResponseAccountsArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('accounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
