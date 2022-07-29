<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateApplicationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ApplicationCreateInputInputObject $application;

    public function setApplication(ApplicationCreateInputInputObject $application)
    {
        $this->application = $application;
        return $this;
    }
}
