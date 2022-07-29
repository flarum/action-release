<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class MergeAccountsResponseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'MergeAccountsResponse';

    public function selectAccount(MergeAccountsResponseAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMessage()
    {
        $this->selectField('message');
        return $this;
    }
}
