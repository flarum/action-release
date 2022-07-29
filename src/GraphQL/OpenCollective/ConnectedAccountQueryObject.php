<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ConnectedAccountQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ConnectedAccount';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    /**
     * @deprecated 2020-05-01: should only be used during the transition to GraphQL API v2.
     */
    public function selectLegacyId()
    {
        $this->selectField('legacyId');
        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField('updatedAt');
        return $this;
    }

    public function selectSettings()
    {
        $this->selectField('settings');
        return $this;
    }

    public function selectService()
    {
        $this->selectField('service');
        return $this;
    }
}
