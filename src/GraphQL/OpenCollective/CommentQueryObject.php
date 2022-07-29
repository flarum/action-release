<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CommentQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Comment';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectHtml()
    {
        $this->selectField('html');
        return $this;
    }

    public function selectFromAccount(CommentFromAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('fromAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAccount(CommentAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectReactions()
    {
        $this->selectField('reactions');
        return $this;
    }

    public function selectUserReactions()
    {
        $this->selectField('userReactions');
        return $this;
    }

    /**
     * @deprecated 2020-02-25: Please use fromAccount
     */
    public function selectFromCollective(CommentFromCollectiveArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('fromCollective');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    /**
     * @deprecated 2020-02-25: Please use account
     */
    public function selectCollective(CommentCollectiveArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('collective');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
