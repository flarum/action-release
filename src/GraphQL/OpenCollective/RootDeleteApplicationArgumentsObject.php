<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootDeleteApplicationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ApplicationReferenceInputInputObject $application;

    public function setApplication(ApplicationReferenceInputInputObject $application)
    {
        $this->application = $application;
        return $this;
    }
}
