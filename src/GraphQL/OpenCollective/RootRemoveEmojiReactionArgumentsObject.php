<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRemoveEmojiReactionArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected CommentReferenceInputInputObject $comment;
    protected UpdateReferenceInputInputObject $update;
    protected string $emoji;

    public function setComment(CommentReferenceInputInputObject $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function setUpdate(UpdateReferenceInputInputObject $update)
    {
        $this->update = $update;
        return $this;
    }

    public function setEmoji($emoji)
    {
        $this->emoji = $emoji;
        return $this;
    }
}
