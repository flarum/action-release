<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootReplyToMemberInvitationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected MemberInvitationReferenceInputInputObject $invitation;
    protected bool $accept;

    public function setInvitation(MemberInvitationReferenceInputInputObject $invitation)
    {
        $this->invitation = $invitation;
        return $this;
    }

    public function setAccept($accept)
    {
        $this->accept = $accept;
        return $this;
    }
}
