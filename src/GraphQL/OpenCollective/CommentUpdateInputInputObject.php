<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CommentUpdateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $html;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }
}
