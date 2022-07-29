<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrganizationCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $name;
    protected $legalName;
    protected $slug;
    protected $description;
    protected $website;
    protected $settings;

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

    public function setSettings($settings)
    {
        $this->settings = $settings;
        return $this;
    }
}
