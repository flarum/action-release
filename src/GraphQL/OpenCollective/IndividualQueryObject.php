<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class IndividualQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Individual';

    public function selectId()
    {
        $this->selectField('id');
        return $this;
    }

    public function selectLegacyId()
    {
        $this->selectField('legacyId');
        return $this;
    }

    public function selectSlug()
    {
        $this->selectField('slug');
        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');
        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');
        return $this;
    }

    public function selectLegalName()
    {
        $this->selectField('legalName');
        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');
        return $this;
    }

    public function selectLongDescription()
    {
        $this->selectField('longDescription');
        return $this;
    }

    public function selectTags()
    {
        $this->selectField('tags');
        return $this;
    }

    public function selectWebsite()
    {
        $this->selectField('website');
        return $this;
    }

    public function selectTwitterHandle()
    {
        $this->selectField('twitterHandle');
        return $this;
    }

    /**
     * @deprecated 2022-06-03: Please use repositoryUrl
     */
    public function selectGithubHandle()
    {
        $this->selectField('githubHandle');
        return $this;
    }

    public function selectRepositoryUrl()
    {
        $this->selectField('repositoryUrl');
        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField('currency');
        return $this;
    }

    public function selectExpensePolicy()
    {
        $this->selectField('expensePolicy');
        return $this;
    }

    public function selectIsIncognito()
    {
        $this->selectField('isIncognito');
        return $this;
    }

    public function selectImageUrl()
    {
        $this->selectField('imageUrl');
        return $this;
    }

    public function selectBackgroundImageUrl()
    {
        $this->selectField('backgroundImageUrl');
        return $this;
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

    public function selectIsArchived()
    {
        $this->selectField('isArchived');
        return $this;
    }

    public function selectIsFrozen()
    {
        $this->selectField('isFrozen');
        return $this;
    }

    public function selectIsActive()
    {
        $this->selectField('isActive');
        return $this;
    }

    public function selectIsHost()
    {
        $this->selectField('isHost');
        return $this;
    }

    public function selectIsAdmin()
    {
        $this->selectField('isAdmin');
        return $this;
    }

    public function selectParentAccount(IndividualParentAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('parentAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMembers(IndividualMembersArgumentsObject $argsObject = null)
    {
        $object = new MemberCollectionQueryObject('members');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberInvitations(IndividualMemberInvitationsArgumentsObject $argsObject = null)
    {
        $object = new MemberInvitationQueryObject('memberInvitations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberOf(IndividualMemberOfArgumentsObject $argsObject = null)
    {
        $object = new MemberOfCollectionQueryObject('memberOf');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEmails()
    {
        $this->selectField('emails');
        return $this;
    }

    public function selectTransactions(IndividualTransactionsArgumentsObject $argsObject = null)
    {
        $object = new TransactionCollectionQueryObject('transactions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOrders(IndividualOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderCollectionQueryObject('orders');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectSettings()
    {
        $this->selectField('settings');
        return $this;
    }

    public function selectConversations(IndividualConversationsArgumentsObject $argsObject = null)
    {
        $object = new ConversationCollectionQueryObject('conversations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConversationsTags(IndividualConversationsTagsArgumentsObject $argsObject = null)
    {
        $object = new TagStatQueryObject('conversationsTags');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectExpensesTags(IndividualExpensesTagsArgumentsObject $argsObject = null)
    {
        $object = new TagStatQueryObject('expensesTags');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTransferwise(IndividualTransferwiseArgumentsObject $argsObject = null)
    {
        $object = new TransferWiseQueryObject('transferwise');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPayoutMethods(IndividualPayoutMethodsArgumentsObject $argsObject = null)
    {
        $object = new PayoutMethodQueryObject('payoutMethods');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPaymentMethods(IndividualPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new PaymentMethodQueryObject('paymentMethods');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConnectedAccounts(IndividualConnectedAccountsArgumentsObject $argsObject = null)
    {
        $object = new ConnectedAccountQueryObject('connectedAccounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOAuthApplications(IndividualOAuthApplicationsArgumentsObject $argsObject = null)
    {
        $object = new OAuthApplicationCollectionQueryObject('oAuthApplications');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectLocation(IndividualLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject('location');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCategories()
    {
        $this->selectField('categories');
        return $this;
    }

    public function selectStats(IndividualStatsArgumentsObject $argsObject = null)
    {
        $object = new AccountStatsQueryObject('stats');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUpdates(IndividualUpdatesArgumentsObject $argsObject = null)
    {
        $object = new UpdateCollectionQueryObject('updates');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFeatures(IndividualFeaturesArgumentsObject $argsObject = null)
    {
        $object = new CollectiveFeaturesQueryObject('features');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVirtualCards(IndividualVirtualCardsArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardCollectionQueryObject('virtualCards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVirtualCardMerchants(IndividualVirtualCardMerchantsArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('virtualCardMerchants');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectChildrenAccounts(IndividualChildrenAccountsArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('childrenAccounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPolicies(IndividualPoliciesArgumentsObject $argsObject = null)
    {
        $object = new PoliciesQueryObject('policies');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectActivitySubscriptions(IndividualActivitySubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new ActivitySubscriptionQueryObject('activitySubscriptions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectWebhooks(IndividualWebhooksArgumentsObject $argsObject = null)
    {
        $object = new WebhookCollectionQueryObject('webhooks');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPermissions(IndividualPermissionsArgumentsObject $argsObject = null)
    {
        $object = new AccountPermissionsQueryObject('permissions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEmail()
    {
        $this->selectField('email');
        return $this;
    }

    public function selectIsGuest()
    {
        $this->selectField('isGuest');
        return $this;
    }

    public function selectIsFollowingConversation()
    {
        $this->selectField('isFollowingConversation');
        return $this;
    }

    public function selectHasTwoFactorAuth()
    {
        $this->selectField('hasTwoFactorAuth');
        return $this;
    }

    public function selectNewsletterOptIn()
    {
        $this->selectField('newsletterOptIn');
        return $this;
    }

    public function selectHost(IndividualHostArgumentsObject $argsObject = null)
    {
        $object = new HostQueryObject('host');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHasSeenLatestChangelogEntry()
    {
        $this->selectField('hasSeenLatestChangelogEntry');
        return $this;
    }

    public function selectOAuthAuthorizations(IndividualOAuthAuthorizationsArgumentsObject $argsObject = null)
    {
        $object = new OAuthAuthorizationCollectionQueryObject('oAuthAuthorizations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
