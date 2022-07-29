<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootRevokeOAuthAuthorizationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected OAuthAuthorizationReferenceInputInputObject $oAuthAuthorization;

    public function setOAuthAuthorization(OAuthAuthorizationReferenceInputInputObject $oAuthAuthorization)
    {
        $this->oAuthAuthorization = $oAuthAuthorization;
        return $this;
    }
}
