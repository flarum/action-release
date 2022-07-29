<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseInviteDraftInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $description;
    protected $longDescription;
    protected $tags;
    protected $type;
    protected $privateMessage;
    protected $invoiceInfo;
    protected $recipientNote;
    protected $items;
    protected $attachedFiles;
    protected $payee;
    protected $payeeLocation;
    protected $payoutMethod;

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }

    public function setType(ExpenseTypeEnumObjectInputObject $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setPrivateMessage($privateMessage)
    {
        $this->privateMessage = $privateMessage;
        return $this;
    }

    public function setInvoiceInfo($invoiceInfo)
    {
        $this->invoiceInfo = $invoiceInfo;
        return $this;
    }

    public function setRecipientNote($recipientNote)
    {
        $this->recipientNote = $recipientNote;
        return $this;
    }

    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }

    public function setAttachedFiles(array $attachedFiles)
    {
        $this->attachedFiles = $attachedFiles;
        return $this;
    }

    public function setPayee(ExpenseInviteeInputObject $payee)
    {
        $this->payee = $payee;
        return $this;
    }

    public function setPayeeLocation(LocationInputInputObject $payeeLocation)
    {
        $this->payeeLocation = $payeeLocation;
        return $this;
    }

    public function setPayoutMethod(PayoutMethodInputInputObject $payoutMethod)
    {
        $this->payoutMethod = $payoutMethod;
        return $this;
    }
}
