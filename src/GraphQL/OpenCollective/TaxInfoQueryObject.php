<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TaxInfoQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TaxInfo';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    /**
     * @deprecated Please use `rate` instead
     */
    public function selectPercentage()
    {
        $this->selectField('percentage');
        return $this;
    }

    public function selectRate()
    {
        $this->selectField('rate');
        return $this;
    }

    public function selectIdNumber()
    {
        $this->selectField('idNumber');
        return $this;
    }
}
