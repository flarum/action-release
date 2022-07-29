<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpensePermissionsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'ExpensePermissions';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectCanEdit()
    {
        $this->selectField('canEdit');
        return $this;
    }

    public function selectCanEditTags()
    {
        $this->selectField('canEditTags');
        return $this;
    }

    public function selectCanDelete()
    {
        $this->selectField('canDelete');
        return $this;
    }

    public function selectCanSeeInvoiceInfo()
    {
        $this->selectField('canSeeInvoiceInfo');
        return $this;
    }

    public function selectCanPay()
    {
        $this->selectField('canPay');
        return $this;
    }

    public function selectCanApprove()
    {
        $this->selectField('canApprove');
        return $this;
    }

    public function selectCanUnapprove()
    {
        $this->selectField('canUnapprove');
        return $this;
    }

    public function selectCanReject()
    {
        $this->selectField('canReject');
        return $this;
    }

    public function selectCanMarkAsSpam()
    {
        $this->selectField('canMarkAsSpam');
        return $this;
    }

    public function selectCanMarkAsUnpaid()
    {
        $this->selectField('canMarkAsUnpaid');
        return $this;
    }

    public function selectCanMarkAsIncomplete()
    {
        $this->selectField('canMarkAsIncomplete');
        return $this;
    }

    public function selectCanComment()
    {
        $this->selectField('canComment');
        return $this;
    }

    public function selectCanUnschedulePayment()
    {
        $this->selectField('canUnschedulePayment');
        return $this;
    }

    public function selectEdit(ExpensePermissionsEditArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('edit');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditTags(ExpensePermissionsEditTagsArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('editTags');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDelete(ExpensePermissionsDeleteArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('delete');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSeeInvoiceInfo(ExpensePermissionsSeeInvoiceInfoArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('seeInvoiceInfo');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPay(ExpensePermissionsPayArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('pay');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectApprove(ExpensePermissionsApproveArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('approve');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUnapprove(ExpensePermissionsUnapproveArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('unapprove');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectReject(ExpensePermissionsRejectArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('reject');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMarkAsSpam(ExpensePermissionsMarkAsSpamArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('markAsSpam');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMarkAsUnpaid(ExpensePermissionsMarkAsUnpaidArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('markAsUnpaid');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectComment(ExpensePermissionsCommentArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('comment');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUnschedulePayment(ExpensePermissionsUnschedulePaymentArgumentsObject $argsObject = null)
    {
        $object = new PermissionQueryObject('unschedulePayment');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
