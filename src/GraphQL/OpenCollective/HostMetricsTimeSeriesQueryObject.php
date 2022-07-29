<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostMetricsTimeSeriesQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'HostMetricsTimeSeries';

    public function selectDateFrom()
    {
        $this->selectField('dateFrom');
        return $this;
    }

    public function selectDateTo()
    {
        $this->selectField('dateTo');
        return $this;
    }

    public function selectTimeUnit()
    {
        $this->selectField('timeUnit');
        return $this;
    }

    public function selectPlatformTips(HostMetricsTimeSeriesPlatformTipsArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountQueryObject('platformTips');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHostFees(HostMetricsTimeSeriesHostFeesArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountQueryObject('hostFees');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHostFeeShare(HostMetricsTimeSeriesHostFeeShareArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountWithSettlementQueryObject('hostFeeShare');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalMoneyManaged(HostMetricsTimeSeriesTotalMoneyManagedArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountQueryObject('totalMoneyManaged');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalReceived(HostMetricsTimeSeriesTotalReceivedArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountWithKindQueryObject('totalReceived');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalSpent(HostMetricsTimeSeriesTotalSpentArgumentsObject $argsObject = null)
    {
        $object = new TimeSeriesAmountWithKindQueryObject('totalSpent');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
