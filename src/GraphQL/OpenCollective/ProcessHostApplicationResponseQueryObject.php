<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ProcessHostApplicationResponseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ProcessHostApplicationResponse';

    public function selectAccount(ProcessHostApplicationResponseAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConversation(ProcessHostApplicationResponseConversationArgumentsObject $argsObject = null)
    {
        $object = new ConversationQueryObject('conversation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
