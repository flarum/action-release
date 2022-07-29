<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ProcessExpensePaymentParamsInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $paymentProcessorFee;
    protected $shouldRefundPaymentProcessorFee;
    protected $forceManual;
    protected $twoFactorAuthenticatorCode;
    protected $feesPayer;

    public function setPaymentProcessorFee($paymentProcessorFee)
    {
        $this->paymentProcessorFee = $paymentProcessorFee;
        return $this;
    }

    public function setShouldRefundPaymentProcessorFee($shouldRefundPaymentProcessorFee)
    {
        $this->shouldRefundPaymentProcessorFee = $shouldRefundPaymentProcessorFee;
        return $this;
    }

    public function setForceManual($forceManual)
    {
        $this->forceManual = $forceManual;
        return $this;
    }

    public function setTwoFactorAuthenticatorCode($twoFactorAuthenticatorCode)
    {
        $this->twoFactorAuthenticatorCode = $twoFactorAuthenticatorCode;
        return $this;
    }

    public function setFeesPayer(FeesPayerEnumObjectInputObject $feesPayer)
    {
        $this->feesPayer = $feesPayer;
        return $this;
    }
}
