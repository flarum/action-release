<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OrderTaxInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $type;
    protected $amount;
    protected $country;
    protected $idNumber;

    public function setType(OrderTaxTypeEnumObjectInputObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setAmount(AmountInputInputObject $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCountry(CountryISOEnumObjectInputObject $country)
    {
        $this->country = $country;
        return $this;
    }

    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
        return $this;
    }
}
