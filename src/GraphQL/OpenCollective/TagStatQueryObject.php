<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TagStatQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TagStat';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectTag()
    {
        $this->selectField('tag');
        return $this;
    }

    public function selectCount()
    {
        $this->selectField('count');
        return $this;
    }
}
