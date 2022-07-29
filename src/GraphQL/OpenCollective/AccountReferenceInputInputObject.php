<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountReferenceInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $slug;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }
}
