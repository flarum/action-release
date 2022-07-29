<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootEditCommentArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected CommentUpdateInputInputObject $comment;

    public function setComment(CommentUpdateInputInputObject $comment)
    {
        $this->comment = $comment;
        return $this;
    }
}
