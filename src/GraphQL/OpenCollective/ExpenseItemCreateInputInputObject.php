<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseItemCreateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $amount;
    protected $description;
    protected $url;
    protected $incurredAt;

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setIncurredAt($incurredAt)
    {
        $this->incurredAt = $incurredAt;
        return $this;
    }
}
