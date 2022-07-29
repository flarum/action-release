<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseInviteeInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $slug;
    protected $name;
    protected $email;
    protected $isInvite;
    protected $organization;

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

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setIsInvite($isInvite)
    {
        $this->isInvite = $isInvite;
        return $this;
    }

    public function setOrganization(ExpenseInviteeOrganizationInputInputObject $organization)
    {
        $this->organization = $organization;
        return $this;
    }
}
