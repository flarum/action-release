<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateProjectArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected ProjectCreateInputInputObject $project;
    protected AccountReferenceInputInputObject $parent;

    public function setProject(ProjectCreateInputInputObject $project)
    {
        $this->project = $project;
        return $this;
    }

    public function setParent(AccountReferenceInputInputObject $parent)
    {
        $this->parent = $parent;
        return $this;
    }
}
