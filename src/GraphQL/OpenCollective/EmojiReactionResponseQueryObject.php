<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class EmojiReactionResponseQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'EmojiReactionResponse';

    public function selectUpdate(EmojiReactionResponseUpdateArgumentsObject $argsObject = null)
    {
        $object = new UpdateQueryObject('update');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectComment(EmojiReactionResponseCommentArgumentsObject $argsObject = null)
    {
        $object = new CommentQueryObject('comment');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
