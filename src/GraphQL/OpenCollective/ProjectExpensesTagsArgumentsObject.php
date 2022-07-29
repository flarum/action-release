<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ProjectExpensesTagsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}
