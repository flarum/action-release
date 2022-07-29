<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ProjectCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $name;
    protected $slug;
    protected $description;
    protected $tags;
    protected $settings;

    public function setName($name)
    {
        $this->name = $name;
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

    public function setTags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }

    public function setSettings($settings)
    {
        $this->settings = $settings;
        return $this;
    }
}
