<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountStatsTotalAmountReceivedArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $kind;
    protected \datetime $dateTo;
    protected \datetime $dateFrom;
    protected int $periodInMonths;
    protected bool $useCache;

    public function setKind(array $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    public function setPeriodInMonths($periodInMonths)
    {
        $this->periodInMonths = $periodInMonths;
        return $this;
    }

    public function setUseCache($useCache)
    {
        $this->useCache = $useCache;
        return $this;
    }
}
