<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class UpdateQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Update';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectLegacyId()
    {
        $this->selectField('legacyId');
        return $this;
    }

    public function selectSlug()
    {
        $this->selectField('slug');
        return $this;
    }

    public function selectUserCanSeeUpdate()
    {
        $this->selectField('userCanSeeUpdate');
        return $this;
    }

    public function selectUserCanPublishUpdate()
    {
        $this->selectField('userCanPublishUpdate');
        return $this;
    }

    public function selectIsPrivate()
    {
        $this->selectField('isPrivate');
        return $this;
    }

    public function selectIsChangelog()
    {
        $this->selectField('isChangelog');
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

    public function selectPublishedAt()
    {
        $this->selectField('publishedAt');
        return $this;
    }

    public function selectNotificationAudience()
    {
        $this->selectField('notificationAudience');
        return $this;
    }

    public function selectAudienceStats(UpdateAudienceStatsArgumentsObject $argsObject = null)
    {
        $object = new UpdateAudienceStatsQueryObject('audienceStats');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMakePublicOn()
    {
        $this->selectField('makePublicOn');
        return $this;
    }

    public function selectSummary()
    {
        $this->selectField('summary');
        return $this;
    }

    public function selectHtml()
    {
        $this->selectField('html');
        return $this;
    }

    public function selectTags()
    {
        $this->selectField('tags');
        return $this;
    }

    public function selectFromAccount(UpdateFromAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('fromAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAccount(UpdateAccountArgumentsObject $argsObject = null)
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

    public function selectComments(UpdateCommentsArgumentsObject $argsObject = null)
    {
        $object = new CommentCollectionQueryObject('comments');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
