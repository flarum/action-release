<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class TransactionPermissionsQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'TransactionPermissions';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectCanRefund()
    {
        $this->selectField('canRefund');
        return $this;
    }

    public function selectCanDownloadInvoice()
    {
        $this->selectField('canDownloadInvoice');
        return $this;
    }

    public function selectCanReject()
    {
        $this->selectField('canReject');
        return $this;
    }
}
