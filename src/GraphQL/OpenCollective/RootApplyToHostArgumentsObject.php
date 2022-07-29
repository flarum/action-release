<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootApplyToHostArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected AccountReferenceInputInputObject $collective;
    protected AccountReferenceInputInputObject $host;
    protected string $message;
    protected \json $applicationData;
    protected array $inviteMembers;

    public function setCollective(AccountReferenceInputInputObject $collective)
    {
        $this->collective = $collective;
        return $this;
    }

    public function setHost(AccountReferenceInputInputObject $host)
    {
        $this->host = $host;
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

    public function setInviteMembers(array $inviteMembers)
    {
        $this->inviteMembers = $inviteMembers;
        return $this;
    }
}
