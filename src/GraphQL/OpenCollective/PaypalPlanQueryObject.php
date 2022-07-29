<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PaypalPlanQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'PaypalPlan';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }
}
