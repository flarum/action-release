<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class NewAccountOrganizationInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $name;
    protected $legalName;
    protected $slug;
    protected $description;
    protected $website;

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

    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }
}
