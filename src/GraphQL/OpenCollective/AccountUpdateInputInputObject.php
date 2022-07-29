<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class AccountUpdateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $currency;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setCurrency(CurrencyEnumObjectInputObject $currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
