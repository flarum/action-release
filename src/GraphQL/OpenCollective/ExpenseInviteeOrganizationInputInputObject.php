<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseInviteeOrganizationInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $description;
    protected $name;
    protected $slug;
    protected $website;

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

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

    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }
}
