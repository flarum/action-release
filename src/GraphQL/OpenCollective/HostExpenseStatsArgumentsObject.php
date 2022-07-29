<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostExpenseStatsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $account;
    protected \datetime $dateFrom;
    protected \datetime $dateTo;
    protected TimeUnitEnumObject $timeUnit;

    public function setAccount(array $account)
    {
        $this->account = $account;
        return $this;
    }

    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    public function setTimeUnit(TimeUnitEnumObject $timeUnit)
    {
        $this->timeUnit = $timeUnit;
        return $this;
    }
}
