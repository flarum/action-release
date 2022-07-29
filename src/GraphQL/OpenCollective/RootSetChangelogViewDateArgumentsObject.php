<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootSetChangelogViewDateArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected \datetime $changelogViewDate;

    public function setChangelogViewDate($changelogViewDate)
    {
        $this->changelogViewDate = $changelogViewDate;
        return $this;
    }
}
