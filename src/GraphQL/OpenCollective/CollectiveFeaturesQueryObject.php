<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class CollectiveFeaturesQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'CollectiveFeatures';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectALL()
    {
        $this->selectField('ALL');
        return $this;
    }

    public function selectRECEIVEFINANCIALCONTRIBUTIONS()
    {
        $this->selectField('RECEIVE_FINANCIAL_CONTRIBUTIONS');
        return $this;
    }

    public function selectRECURRINGCONTRIBUTIONS()
    {
        $this->selectField('RECURRING_CONTRIBUTIONS');
        return $this;
    }

    public function selectTRANSACTIONS()
    {
        $this->selectField('TRANSACTIONS');
        return $this;
    }

    public function selectEVENTS()
    {
        $this->selectField('EVENTS');
        return $this;
    }

    public function selectPROJECTS()
    {
        $this->selectField('PROJECTS');
        return $this;
    }

    public function selectUSEEXPENSES()
    {
        $this->selectField('USE_EXPENSES');
        return $this;
    }

    public function selectRECEIVEEXPENSES()
    {
        $this->selectField('RECEIVE_EXPENSES');
        return $this;
    }

    public function selectMULTICURRENCYEXPENSES()
    {
        $this->selectField('MULTI_CURRENCY_EXPENSES');
        return $this;
    }

    public function selectRECEIVEHOSTAPPLICATIONS()
    {
        $this->selectField('RECEIVE_HOST_APPLICATIONS');
        return $this;
    }

    public function selectCOLLECTIVEGOALS()
    {
        $this->selectField('COLLECTIVE_GOALS');
        return $this;
    }

    public function selectTOPFINANCIALCONTRIBUTORS()
    {
        $this->selectField('TOP_FINANCIAL_CONTRIBUTORS');
        return $this;
    }

    public function selectCONVERSATIONS()
    {
        $this->selectField('CONVERSATIONS');
        return $this;
    }

    public function selectUPDATES()
    {
        $this->selectField('UPDATES');
        return $this;
    }

    public function selectABOUT()
    {
        $this->selectField('ABOUT');
        return $this;
    }

    public function selectTEAM()
    {
        $this->selectField('TEAM');
        return $this;
    }

    public function selectORDER()
    {
        $this->selectField('ORDER');
        return $this;
    }

    public function selectCONTACTCOLLECTIVE()
    {
        $this->selectField('CONTACT_COLLECTIVE');
        return $this;
    }

    public function selectCONTACTFORM()
    {
        $this->selectField('CONTACT_FORM');
        return $this;
    }

    public function selectCREATECOLLECTIVE()
    {
        $this->selectField('CREATE_COLLECTIVE');
        return $this;
    }

    public function selectCROSSCURRENCYMANUALTRANSACTIONS()
    {
        $this->selectField('CROSS_CURRENCY_MANUAL_TRANSACTIONS');
        return $this;
    }

    public function selectTRANSFERWISE()
    {
        $this->selectField('TRANSFERWISE');
        return $this;
    }

    public function selectPAYPALPAYOUTS()
    {
        $this->selectField('PAYPAL_PAYOUTS');
        return $this;
    }

    public function selectPAYPALDONATIONS()
    {
        $this->selectField('PAYPAL_DONATIONS');
        return $this;
    }

    public function selectHOSTDASHBOARD()
    {
        $this->selectField('HOST_DASHBOARD');
        return $this;
    }

    public function selectCONNECTEDACCOUNTS()
    {
        $this->selectField('CONNECTED_ACCOUNTS');
        return $this;
    }

    public function selectALIPAY()
    {
        $this->selectField('ALIPAY');
        return $this;
    }

    public function selectUSEPAYMENTMETHODS()
    {
        $this->selectField('USE_PAYMENT_METHODS');
        return $this;
    }

    public function selectEMITGIFTCARDS()
    {
        $this->selectField('EMIT_GIFT_CARDS');
        return $this;
    }

    public function selectEMAILNOTIFICATIONSPANEL()
    {
        $this->selectField('EMAIL_NOTIFICATIONS_PANEL');
        return $this;
    }

    public function selectVIRTUALCARDS()
    {
        $this->selectField('VIRTUAL_CARDS');
        return $this;
    }

    public function selectREQUESTVIRTUALCARDS()
    {
        $this->selectField('REQUEST_VIRTUAL_CARDS');
        return $this;
    }
}
