<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootAccountArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $id;
    protected string $slug;
    protected string $githubHandle;
    protected bool $throwIfMissing;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    public function setGithubHandle($githubHandle)
    {
        $this->githubHandle = $githubHandle;
        return $this;
    }

    public function setThrowIfMissing($throwIfMissing)
    {
        $this->throwIfMissing = $throwIfMissing;
        return $this;
    }
}
