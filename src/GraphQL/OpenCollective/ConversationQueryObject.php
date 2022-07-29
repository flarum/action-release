<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ConversationQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Conversation';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectSlug()
    {
        $this->selectField('slug');
        return $this;
    }

    public function selectTitle()
    {
        $this->selectField('title');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField('updatedAt');
        return $this;
    }

    public function selectTags()
    {
        $this->selectField('tags');
        return $this;
    }

    public function selectSummary()
    {
        $this->selectField('summary');
        return $this;
    }

    public function selectCollective(ConversationCollectiveArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('collective');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFromCollective(ConversationFromCollectiveArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('fromCollective');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectBody(ConversationBodyArgumentsObject $argsObject = null)
    {
        $object = new CommentQueryObject('body');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectComments(ConversationCommentsArgumentsObject $argsObject = null)
    {
        $object = new CommentCollectionQueryObject('comments');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFollowers(ConversationFollowersArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('followers');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectStats(ConversationStatsArgumentsObject $argsObject = null)
    {
        $object = new ConversationStatsQueryObject('stats');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
