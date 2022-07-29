<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseAttachedFileInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $url;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
