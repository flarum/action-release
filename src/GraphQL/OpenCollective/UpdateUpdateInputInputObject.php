<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class UpdateUpdateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $slug;
    protected $title;
    protected $isPrivate;
    protected $makePublicOn;
    protected $html;
    protected $fromAccount;

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

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    public function setMakePublicOn($makePublicOn)
    {
        $this->makePublicOn = $makePublicOn;
        return $this;
    }

    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }

    public function setFromAccount(AccountReferenceInputInputObject $fromAccount)
    {
        $this->fromAccount = $fromAccount;
        return $this;
    }
}
