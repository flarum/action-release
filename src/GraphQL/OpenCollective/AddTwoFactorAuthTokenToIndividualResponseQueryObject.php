<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AddTwoFactorAuthTokenToIndividualResponseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'AddTwoFactorAuthTokenToIndividualResponse';

    public function selectAccount(AddTwoFactorAuthTokenToIndividualResponseAccountArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRecoveryCodes()
    {
        $this->selectField('recoveryCodes');
        return $this;
    }
}
