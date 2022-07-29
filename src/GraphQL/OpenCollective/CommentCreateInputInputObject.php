<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CommentCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $html;
    protected $expense;
    protected $ConversationId;
    protected $update;

    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }

    public function setExpense(ExpenseReferenceInputInputObject $expense)
    {
        $this->expense = $expense;
        return $this;
    }

    public function setConversationId($conversationId)
    {
        $this->ConversationId = $conversationId;
        return $this;
    }

    public function setUpdate(UpdateReferenceInputInputObject $update)
    {
        $this->update = $update;
        return $this;
    }
}
