<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootMutationObject extends \GraphQL\SchemaObject\MutationObject
{
    public const OBJECT_NAME = '';

    public function selectAddFunds(RootAddFundsArgumentsObject $argsObject = null)
    {
        $object = new OrderMutationObject('addFunds');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateCollective(RootCreateCollectiveArgumentsObject $argsObject = null)
    {
        $object = new CollectiveMutationObject('createCollective');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateEvent(RootCreateEventArgumentsObject $argsObject = null)
    {
        $object = new EventMutationObject('createEvent');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateFund(RootCreateFundArgumentsObject $argsObject = null)
    {
        $object = new FundMutationObject('createFund');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateOrganization(RootCreateOrganizationArgumentsObject $argsObject = null)
    {
        $object = new OrganizationMutationObject('createOrganization');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateProject(RootCreateProjectArgumentsObject $argsObject = null)
    {
        $object = new ProjectMutationObject('createProject');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditAccountSetting(RootEditAccountSettingArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('editAccountSetting');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditAccountFeeStructure(RootEditAccountFeeStructureArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('editAccountFeeStructure');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditAccountFreezeStatus(RootEditAccountFreezeStatusArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('editAccountFreezeStatus');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAddTwoFactorAuthTokenToIndividual(RootAddTwoFactorAuthTokenToIndividualArgumentsObject $argsObject = null)
    {
        $object = new AddTwoFactorAuthTokenToIndividualResponseMutationObject('addTwoFactorAuthTokenToIndividual');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRemoveTwoFactorAuthTokenFromIndividual(RootRemoveTwoFactorAuthTokenFromIndividualArgumentsObject $argsObject = null)
    {
        $object = new IndividualMutationObject('removeTwoFactorAuthTokenFromIndividual');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    /**
     * @deprecated 2022-07-06: Host Plans are deprecated.
     */
    public function selectEditHostPlan(RootEditHostPlanArgumentsObject $argsObject = null)
    {
        $object = new HostMutationObject('editHostPlan');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditAccount(RootEditAccountArgumentsObject $argsObject = null)
    {
        $object = new HostMutationObject('editAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSetPolicies(RootSetPoliciesArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('setPolicies');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteAccount(RootDeleteAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('deleteAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateApplication(RootCreateApplicationArgumentsObject $argsObject = null)
    {
        $object = new ApplicationMutationObject('createApplication');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUpdateApplication(RootUpdateApplicationArgumentsObject $argsObject = null)
    {
        $object = new ApplicationMutationObject('updateApplication');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteApplication(RootDeleteApplicationArgumentsObject $argsObject = null)
    {
        $object = new ApplicationMutationObject('deleteApplication');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditComment(RootEditCommentArgumentsObject $argsObject = null)
    {
        $object = new CommentMutationObject('editComment');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteComment(RootDeleteCommentArgumentsObject $argsObject = null)
    {
        $object = new CommentMutationObject('deleteComment');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateComment(RootCreateCommentArgumentsObject $argsObject = null)
    {
        $object = new CommentMutationObject('createComment');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateConnectedAccount(RootCreateConnectedAccountArgumentsObject $argsObject = null)
    {
        $object = new ConnectedAccountMutationObject('createConnectedAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteConnectedAccount(RootDeleteConnectedAccountArgumentsObject $argsObject = null)
    {
        $object = new ConnectedAccountMutationObject('deleteConnectedAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateConversation(RootCreateConversationArgumentsObject $argsObject = null)
    {
        $object = new ConversationMutationObject('createConversation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditConversation(RootEditConversationArgumentsObject $argsObject = null)
    {
        $object = new ConversationMutationObject('editConversation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFollowConversation(RootFollowConversationArgumentsObject $argsObject = null)
    {
        $object = new followConversationMutationObject('followConversation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAddEmojiReaction(RootAddEmojiReactionArgumentsObject $argsObject = null)
    {
        $object = new EmojiReactionResponseMutationObject('addEmojiReaction');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRemoveEmojiReaction(RootRemoveEmojiReactionArgumentsObject $argsObject = null)
    {
        $object = new EmojiReactionResponseMutationObject('removeEmojiReaction');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateExpense(RootCreateExpenseArgumentsObject $argsObject = null)
    {
        $object = new ExpenseMutationObject('createExpense');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditExpense(RootEditExpenseArgumentsObject $argsObject = null)
    {
        $object = new ExpenseMutationObject('editExpense');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteExpense(RootDeleteExpenseArgumentsObject $argsObject = null)
    {
        $object = new ExpenseMutationObject('deleteExpense');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectProcessExpense(RootProcessExpenseArgumentsObject $argsObject = null)
    {
        $object = new ExpenseMutationObject('processExpense');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDraftExpenseAndInviteUser(RootDraftExpenseAndInviteUserArgumentsObject $argsObject = null)
    {
        $object = new ExpenseMutationObject('draftExpenseAndInviteUser');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectResendDraftExpenseInvite(RootResendDraftExpenseInviteArgumentsObject $argsObject = null)
    {
        $object = new ExpenseMutationObject('resendDraftExpenseInvite');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVerifyExpense(RootVerifyExpenseArgumentsObject $argsObject = null)
    {
        $object = new ExpenseMutationObject('verifyExpense');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSendGuestConfirmationEmail(RootSendGuestConfirmationEmailArgumentsObject $argsObject = null)
    {
        $object = new sendGuestConfirmationEmailMutationObject('sendGuestConfirmationEmail');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConfirmGuestAccount(RootConfirmGuestAccountArgumentsObject $argsObject = null)
    {
        $object = new ConfirmGuestAccountResponseMutationObject('confirmGuestAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectApplyToHost(RootApplyToHostArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('applyToHost');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectProcessHostApplication(RootProcessHostApplicationArgumentsObject $argsObject = null)
    {
        $object = new ProcessHostApplicationResponseMutationObject('processHostApplication');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRemoveHost(RootRemoveHostArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('removeHost');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSetChangelogViewDate(RootSetChangelogViewDateArgumentsObject $argsObject = null)
    {
        $object = new IndividualMutationObject('setChangelogViewDate');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSetNewsletterOptIn(RootSetNewsletterOptInArgumentsObject $argsObject = null)
    {
        $object = new IndividualMutationObject('setNewsletterOptIn');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectInviteMember(RootInviteMemberArgumentsObject $argsObject = null)
    {
        $object = new MemberInvitationMutationObject('inviteMember');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditMemberInvitation(RootEditMemberInvitationArgumentsObject $argsObject = null)
    {
        $object = new MemberInvitationMutationObject('editMemberInvitation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectReplyToMemberInvitation(RootReplyToMemberInvitationArgumentsObject $argsObject = null)
    {
        $object = new replyToMemberInvitationMutationObject('replyToMemberInvitation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditPublicMessage(RootEditPublicMessageArgumentsObject $argsObject = null)
    {
        $object = new MemberMutationObject('editPublicMessage');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateMember(RootCreateMemberArgumentsObject $argsObject = null)
    {
        $object = new MemberMutationObject('createMember');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditMember(RootEditMemberArgumentsObject $argsObject = null)
    {
        $object = new MemberMutationObject('editMember');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRemoveMember(RootRemoveMemberArgumentsObject $argsObject = null)
    {
        $object = new removeMemberMutationObject('removeMember');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRevokeOAuthAuthorization(RootRevokeOAuthAuthorizationArgumentsObject $argsObject = null)
    {
        $object = new OAuthAuthorizationMutationObject('revokeOAuthAuthorization');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateOrder(RootCreateOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderWithPaymentMutationObject('createOrder');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCancelOrder(RootCancelOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderMutationObject('cancelOrder');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUpdateOrder(RootUpdateOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderMutationObject('updateOrder');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConfirmOrder(RootConfirmOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderWithPaymentMutationObject('confirmOrder');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectProcessPendingOrder(RootProcessPendingOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderMutationObject('processPendingOrder');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMoveOrders(RootMoveOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderMutationObject('moveOrders');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAddCreditCard(RootAddCreditCardArgumentsObject $argsObject = null)
    {
        $object = new CreditCardWithStripeErrorMutationObject('addCreditCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConfirmCreditCard(RootConfirmCreditCardArgumentsObject $argsObject = null)
    {
        $object = new CreditCardWithStripeErrorMutationObject('confirmCreditCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreatePayoutMethod(RootCreatePayoutMethodArgumentsObject $argsObject = null)
    {
        $object = new PayoutMethodMutationObject('createPayoutMethod');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRemovePayoutMethod(RootRemovePayoutMethodArgumentsObject $argsObject = null)
    {
        $object = new PayoutMethodMutationObject('removePayoutMethod');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectClearCacheForAccount(RootClearCacheForAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountMutationObject('clearCacheForAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMergeAccounts(RootMergeAccountsArgumentsObject $argsObject = null)
    {
        $object = new MergeAccountsResponseMutationObject('mergeAccounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectBanAccount(RootBanAccountArgumentsObject $argsObject = null)
    {
        $object = new BanAccountResponseMutationObject('banAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    /**
     * @deprecated 2022-07-06: This feature will not be supported in the future. Please don't rely on it.
     */
    public function selectAddPlatformTipToTransaction(RootAddPlatformTipToTransactionArgumentsObject $argsObject = null)
    {
        $object = new TransactionMutationObject('addPlatformTipToTransaction');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRefundTransaction(RootRefundTransactionArgumentsObject $argsObject = null)
    {
        $object = new TransactionMutationObject('refundTransaction');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRejectTransaction(RootRejectTransactionArgumentsObject $argsObject = null)
    {
        $object = new TransactionMutationObject('rejectTransaction');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateUpdate(RootCreateUpdateArgumentsObject $argsObject = null)
    {
        $object = new UpdateMutationObject('createUpdate');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditUpdate(RootEditUpdateArgumentsObject $argsObject = null)
    {
        $object = new UpdateMutationObject('editUpdate');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPublishUpdate(RootPublishUpdateArgumentsObject $argsObject = null)
    {
        $object = new UpdateMutationObject('publishUpdate');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUnpublishUpdate(RootUnpublishUpdateArgumentsObject $argsObject = null)
    {
        $object = new UpdateMutationObject('unpublishUpdate');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteUpdate(RootDeleteUpdateArgumentsObject $argsObject = null)
    {
        $object = new UpdateMutationObject('deleteUpdate');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAssignNewVirtualCard(RootAssignNewVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardMutationObject('assignNewVirtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateVirtualCard(RootCreateVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardMutationObject('createVirtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEditVirtualCard(RootEditVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardMutationObject('editVirtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectRequestVirtualCard(RootRequestVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new requestVirtualCardMutationObject('requestVirtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPauseVirtualCard(RootPauseVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardMutationObject('pauseVirtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectResumeVirtualCard(RootResumeVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardMutationObject('resumeVirtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteVirtualCard(RootDeleteVirtualCardArgumentsObject $argsObject = null)
    {
        $object = new deleteVirtualCardMutationObject('deleteVirtualCard');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCreateWebhook(RootCreateWebhookArgumentsObject $argsObject = null)
    {
        $object = new WebhookMutationObject('createWebhook');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUpdateWebhook(RootUpdateWebhookArgumentsObject $argsObject = null)
    {
        $object = new WebhookMutationObject('updateWebhook');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectDeleteWebhook(RootDeleteWebhookArgumentsObject $argsObject = null)
    {
        $object = new WebhookMutationObject('deleteWebhook');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSetEmailNotification(RootSetEmailNotificationArgumentsObject $argsObject = null)
    {
        $object = new ActivitySubscriptionMutationObject('setEmailNotification');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
