<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateOrganizationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OrganizationCreateInputInputObject $organization;

    public function setOrganization(OrganizationCreateInputInputObject $organization)
    {
        $this->organization = $organization;
        return $this;
    }
}
