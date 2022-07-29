<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ExpenseUpdateInputInputObject extends \GraphQL\SchemaObject\InputObject
{
    protected $id;
    protected $description;
    protected $longDescription;
    protected $currency;
    protected $tags;
    protected $type;
    protected $privateMessage;
    protected $invoiceInfo;
    protected $payoutMethod;
    protected $attachments;
    protected $items;
    protected $attachedFiles;
    protected $payee;
    protected $payeeLocation;
    protected $tax;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

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

    public function setCurrency(CurrencyEnumObjectInputObject $currency)
    {
        $this->currency = $currency;
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

    public function setPayoutMethod(PayoutMethodInputInputObject $payoutMethod)
    {
        $this->payoutMethod = $payoutMethod;
        return $this;
    }

    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
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

    public function setPayee(NewAccountOrReferenceInputInputObject $payee)
    {
        $this->payee = $payee;
        return $this;
    }

    public function setPayeeLocation(LocationInputInputObject $payeeLocation)
    {
        $this->payeeLocation = $payeeLocation;
        return $this;
    }

    public function setTax(array $tax)
    {
        $this->tax = $tax;
        return $this;
    }
}
