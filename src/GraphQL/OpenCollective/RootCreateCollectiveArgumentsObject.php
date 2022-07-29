<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateCollectiveArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected CollectiveCreateInputInputObject $collective;
    protected AccountReferenceInputInputObject $host;
    protected IndividualCreateInputInputObject $user;
    protected bool $automateApprovalWithGithub;
    protected string $message;
    protected \json $applicationData;
    protected \json $testPayload;
    protected bool $skipDefaultAdmin;
    protected array $inviteMembers;

    public function setCollective(CollectiveCreateInputInputObject $collective)
    {
        $this->collective = $collective;
        return $this;
    }

    public function setHost(AccountReferenceInputInputObject $host)
    {
        $this->host = $host;
        return $this;
    }

    public function setUser(IndividualCreateInputInputObject $user)
    {
        $this->user = $user;
        return $this;
    }

    public function setAutomateApprovalWithGithub($automateApprovalWithGithub)
    {
        $this->automateApprovalWithGithub = $automateApprovalWithGithub;
        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function setApplicationData($applicationData)
    {
        $this->applicationData = $applicationData;
        return $this;
    }

    public function setTestPayload($testPayload)
    {
        $this->testPayload = $testPayload;
        return $this;
    }

    public function setSkipDefaultAdmin($skipDefaultAdmin)
    {
        $this->skipDefaultAdmin = $skipDefaultAdmin;
        return $this;
    }

    public function setInviteMembers(array $inviteMembers)
    {
        $this->inviteMembers = $inviteMembers;
        return $this;
    }
}
