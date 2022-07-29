<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ContributorQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Contributor';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectRoles()
    {
        $this->selectField('roles');
        return $this;
    }

    public function selectIsAdmin()
    {
        $this->selectField('isAdmin');
        return $this;
    }

    public function selectIsCore()
    {
        $this->selectField('isCore');
        return $this;
    }

    public function selectIsBacker()
    {
        $this->selectField('isBacker');
        return $this;
    }

    public function selectSince()
    {
        $this->selectField('since');
        return $this;
    }

    public function selectTotalAmountDonated()
    {
        $this->selectField('totalAmountDonated');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectIsIncognito()
    {
        $this->selectField('isIncognito');
        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    public function selectCollectiveSlug()
    {
        $this->selectField('collectiveSlug');
        return $this;
    }

    public function selectImage()
    {
        $this->selectField('image');
        return $this;
    }

    public function selectPublicMessage()
    {
        $this->selectField('publicMessage');
        return $this;
    }
}
