<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class PoliciesQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Policies';

    public function selectEXPENSEAUTHORCANNOTAPPROVE()
    {
        $this->selectField('EXPENSE_AUTHOR_CANNOT_APPROVE');
        return $this;
    }

    public function selectCOLLECTIVEMINIMUMADMINS(PoliciesCOLLECTIVEMINIMUMADMINSArgumentsObject $argsObject = null)
    {
        $object = new COLLECTIVE_MINIMUM_ADMINSQueryObject('COLLECTIVE_MINIMUM_ADMINS');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
