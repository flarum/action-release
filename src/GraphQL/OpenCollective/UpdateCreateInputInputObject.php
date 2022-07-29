<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class UpdateCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $title;
    protected $isPrivate;
    protected $isChangelog;
    protected $makePublicOn;
    protected $html;
    protected $fromAccount;
    protected $account;

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

    public function setIsChangelog($isChangelog)
    {
        $this->isChangelog = $isChangelog;
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

    public function setAccount(AccountReferenceInputInputObject $account)
    {
        $this->account = $account;
        return $this;
    }
}
