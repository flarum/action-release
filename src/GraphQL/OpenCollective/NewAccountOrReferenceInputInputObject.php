<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class NewAccountOrReferenceInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $slug;
    protected $name;
    protected $legalName;
    protected $email;
    protected $organization;
    protected $newsletterOptIn;

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

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setOrganization(NewAccountOrganizationInputInputObject $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    public function setNewsletterOptIn($newsletterOptIn)
    {
        $this->newsletterOptIn = $newsletterOptIn;
        return $this;
    }
}
