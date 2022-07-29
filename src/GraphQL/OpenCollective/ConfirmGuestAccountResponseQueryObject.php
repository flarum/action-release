<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ConfirmGuestAccountResponseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ConfirmGuestAccountResponse';

    public function selectAccount(ConfirmGuestAccountResponseAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAccessToken()
    {
        $this->selectField('accessToken');
        return $this;
    }
}
