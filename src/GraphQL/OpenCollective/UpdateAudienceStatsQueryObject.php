<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class UpdateAudienceStatsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'UpdateAudienceStats';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectCoreContributors()
    {
        $this->selectField('coreContributors');
        return $this;
    }

    public function selectIndividuals()
    {
        $this->selectField('individuals');
        return $this;
    }

    public function selectOrganizations()
    {
        $this->selectField('organizations');
        return $this;
    }

    public function selectCollectives()
    {
        $this->selectField('collectives');
        return $this;
    }

    public function selectHosted()
    {
        $this->selectField('hosted');
        return $this;
    }

    public function selectTotal()
    {
        $this->selectField('total');
        return $this;
    }
}
