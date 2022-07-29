<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostMetricsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'HostMetrics';

    public function selectHostFees(HostMetricsHostFeesArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('hostFees');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPlatformFees(HostMetricsPlatformFeesArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('platformFees');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPendingPlatformFees(HostMetricsPendingPlatformFeesArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('pendingPlatformFees');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPlatformTips(HostMetricsPlatformTipsArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('platformTips');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPendingPlatformTips(HostMetricsPendingPlatformTipsArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('pendingPlatformTips');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHostFeeShare(HostMetricsHostFeeShareArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('hostFeeShare');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPendingHostFeeShare(HostMetricsPendingHostFeeShareArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('pendingHostFeeShare');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSettledHostFeeShare(HostMetricsSettledHostFeeShareArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('settledHostFeeShare');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTotalMoneyManaged(HostMetricsTotalMoneyManagedArgumentsObject $argsObject = null)
    {
        $object = new AmountQueryObject('totalMoneyManaged');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHostFeeSharePercent()
    {
        $this->selectField('hostFeeSharePercent');
        return $this;
    }
}
