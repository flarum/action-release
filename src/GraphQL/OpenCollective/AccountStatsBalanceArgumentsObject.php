<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountStatsBalanceArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected \datetime $dateFrom;
    protected \datetime $dateTo;

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
}
