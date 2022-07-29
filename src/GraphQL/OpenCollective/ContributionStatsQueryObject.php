<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ContributionStatsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ContributionStats';

    public function selectContributionsCount()
    {
        $this->selectField('contributionsCount');
        return $this;
    }

    /**
     * @deprecated 2022-04-21: Please use hostMetricsTimeSeries.totalReceived
     */
    public function selectContributionAmountOverTime(ContributionStatsContributionAmountOverTimeArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountQueryObject('contributionAmountOverTime');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOneTimeContributionsCount()
    {
        $this->selectField('oneTimeContributionsCount');
        return $this;
    }

    public function selectRecurringContributionsCount()
    {
        $this->selectField('recurringContributionsCount');
        return $this;
    }

    public function selectDailyAverageIncomeAmount(ContributionStatsDailyAverageIncomeAmountArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('dailyAverageIncomeAmount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
