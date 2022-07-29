<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootUpdateArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $id;
    protected string $slug;
    protected AccountReferenceInputInputObject $account;

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

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
