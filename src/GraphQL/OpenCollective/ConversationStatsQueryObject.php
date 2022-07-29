<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ConversationStatsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ConversationStats';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectCommentsCount()
    {
        $this->selectField('commentsCount');
        return $this;
    }
}
