<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class FundPaymentMethodsArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected array $type;
    protected array $service;
    protected bool $includeExpired;

    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }

    public function setIncludeExpired($includeExpired)
    {
        $this->includeExpired = $includeExpired;
        return $this;
    }
}
