<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RecurringExpenseInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $interval;
    protected $endsAt;

    public function setInterval(RecurringExpenseIntervalEnumObjectInputObject $interval)
    {
        $this->interval = $interval;
        return $this;
    }

    public function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;
        return $this;
    }
}
