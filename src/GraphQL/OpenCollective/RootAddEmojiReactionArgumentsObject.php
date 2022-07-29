<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAddEmojiReactionArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $emoji;
    protected CommentReferenceInputInputObject $comment;
    protected UpdateReferenceInputInputObject $update;

    public function setEmoji($emoji)
    {
        $this->emoji = $emoji;
        return $this;
    }

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
}
