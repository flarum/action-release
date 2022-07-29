<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootSetNewsletterOptInArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected bool $newsletterOptIn;

    public function setNewsletterOptIn($newsletterOptIn)
    {
        $this->newsletterOptIn = $newsletterOptIn;
        return $this;
    }
}
