<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateCommentArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected CommentCreateInputInputObject $comment;

    public function setComment(CommentCreateInputInputObject $comment)
    {
        $this->comment = $comment;
        return $this;
    }
}
