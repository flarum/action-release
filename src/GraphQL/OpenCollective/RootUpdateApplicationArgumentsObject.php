<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootUpdateApplicationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ApplicationUpdateInputInputObject $application;

    public function setApplication(ApplicationUpdateInputInputObject $application)
    {
        $this->application = $application;
        return $this;
    }
}
