<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AmountInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $value;
    protected $currency;
    protected $valueInCents;

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function setCurrency(CurrencyEnumObjectInputObject $currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function setValueInCents($valueInCents)
    {
        $this->valueInCents = $valueInCents;
        return $this;
    }
}
