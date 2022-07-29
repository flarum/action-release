<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ApplicationQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Application';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectLegacyId()
    {
        $this->selectField('legacyId');
        return $this;
    }

    /**
     * @deprecated 2022-06-16: This Application object will only be used for OAuth tokens. Use PersonalToken for user tokens
     */
    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    /**
     * @deprecated 2022-06-16: This Application object will only be used for OAuth tokens. Use PersonalToken for user tokens
     */
    public function selectApiKey()
    {
        $this->selectField('apiKey');
        return $this;
    }

    public function selectClientId()
    {
        $this->selectField('clientId');
        return $this;
    }

    public function selectClientSecret()
    {
        $this->selectField('clientSecret');
        return $this;
    }

    public function selectRedirectUri()
    {
        $this->selectField('redirectUri');
        return $this;
    }

    public function selectAccount(ApplicationAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOAuthAuthorization(ApplicationOAuthAuthorizationArgumentsObject $argsObject = null)
    {
        $object = new OAuthAuthorizationQueryObject('oAuthAuthorization');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
