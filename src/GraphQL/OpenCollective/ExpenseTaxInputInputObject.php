<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseTaxInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $type;
    protected $rate;
    protected $idNumber;

    public function setType(TaxTypeEnumObjectInputObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
        return $this;
    }
}
