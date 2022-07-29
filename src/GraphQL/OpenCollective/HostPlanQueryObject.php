<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class HostPlanQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'HostPlan';

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

    public function selectHostedCollectives()
    {
        $this->selectField('hostedCollectives');
        return $this;
    }

    public function selectHostedCollectivesLimit()
    {
        $this->selectField('hostedCollectivesLimit');
        return $this;
    }

    public function selectAddedFunds()
    {
        $this->selectField('addedFunds');
        return $this;
    }

    public function selectAddedFundsLimit()
    {
        $this->selectField('addedFundsLimit');
        return $this;
    }

    public function selectHostDashboard()
    {
        $this->selectField('hostDashboard');
        return $this;
    }

    public function selectManualPayments()
    {
        $this->selectField('manualPayments');
        return $this;
    }

    public function selectBankTransfers()
    {
        $this->selectField('bankTransfers');
        return $this;
    }

    public function selectBankTransfersLimit()
    {
        $this->selectField('bankTransfersLimit');
        return $this;
    }

    public function selectTransferwisePayouts()
    {
        $this->selectField('transferwisePayouts');
        return $this;
    }

    public function selectTransferwisePayoutsLimit()
    {
        $this->selectField('transferwisePayoutsLimit');
        return $this;
    }

    public function selectHostFees()
    {
        $this->selectField('hostFees');
        return $this;
    }

    public function selectHostFeeSharePercent()
    {
        $this->selectField('hostFeeSharePercent');
        return $this;
    }

    public function selectPlatformTips()
    {
        $this->selectField('platformTips');
        return $this;
    }
}
