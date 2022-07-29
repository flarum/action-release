<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class OAuthAuthorizationQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'OAuthAuthorization';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectAccount(OAuthAuthorizationAccountArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectApplication(OAuthAuthorizationApplicationArgumentsObject $argsObject = null)
    {
        $object = new ApplicationQueryObject('application');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');
        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField('updatedAt');
        return $this;
    }

    public function selectExpiresAt()
    {
        $this->selectField('expiresAt');
        return $this;
    }

    public function selectScope()
    {
        $this->selectField('scope');
        return $this;
    }
}
