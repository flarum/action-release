<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class EventQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Event';

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

    public function selectParentAccount(EventParentAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('parentAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMembers(EventMembersArgumentsObject $argsObject = null)
    {
        $object = new MemberCollectionQueryObject('members');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberInvitations(EventMemberInvitationsArgumentsObject $argsObject = null)
    {
        $object = new MemberInvitationQueryObject('memberInvitations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberOf(EventMemberOfArgumentsObject $argsObject = null)
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

    public function selectTransactions(EventTransactionsArgumentsObject $argsObject = null)
    {
        $object = new TransactionCollectionQueryObject('transactions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOrders(EventOrdersArgumentsObject $argsObject = null)
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

    public function selectConversations(EventConversationsArgumentsObject $argsObject = null)
    {
        $object = new ConversationCollectionQueryObject('conversations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConversationsTags(EventConversationsTagsArgumentsObject $argsObject = null)
    {
        $object = new TagStatQueryObject('conversationsTags');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectExpensesTags(EventExpensesTagsArgumentsObject $argsObject = null)
    {
        $object = new TagStatQueryObject('expensesTags');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTransferwise(EventTransferwiseArgumentsObject $argsObject = null)
    {
        $object = new TransferWiseQueryObject('transferwise');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPayoutMethods(EventPayoutMethodsArgumentsObject $argsObject = null)
    {
        $object = new PayoutMethodQueryObject('payoutMethods');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPaymentMethods(EventPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new PaymentMethodQueryObject('paymentMethods');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConnectedAccounts(EventConnectedAccountsArgumentsObject $argsObject = null)
    {
        $object = new ConnectedAccountQueryObject('connectedAccounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOAuthApplications(EventOAuthApplicationsArgumentsObject $argsObject = null)
    {
        $object = new OAuthApplicationCollectionQueryObject('oAuthApplications');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectLocation(EventLocationArgumentsObject $argsObject = null)
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

    public function selectStats(EventStatsArgumentsObject $argsObject = null)
    {
        $object = new AccountStatsQueryObject('stats');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUpdates(EventUpdatesArgumentsObject $argsObject = null)
    {
        $object = new UpdateCollectionQueryObject('updates');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFeatures(EventFeaturesArgumentsObject $argsObject = null)
    {
        $object = new CollectiveFeaturesQueryObject('features');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVirtualCards(EventVirtualCardsArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardCollectionQueryObject('virtualCards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVirtualCardMerchants(EventVirtualCardMerchantsArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('virtualCardMerchants');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectChildrenAccounts(EventChildrenAccountsArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('childrenAccounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPolicies(EventPoliciesArgumentsObject $argsObject = null)
    {
        $object = new PoliciesQueryObject('policies');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectActivitySubscriptions(EventActivitySubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new ActivitySubscriptionQueryObject('activitySubscriptions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectWebhooks(EventWebhooksArgumentsObject $argsObject = null)
    {
        $object = new WebhookCollectionQueryObject('webhooks');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPermissions(EventPermissionsArgumentsObject $argsObject = null)
    {
        $object = new AccountPermissionsQueryObject('permissions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHost(EventHostArgumentsObject $argsObject = null)
    {
        $object = new HostQueryObject('host');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHostFeesStructure()
    {
        $this->selectField('hostFeesStructure');
        return $this;
    }

    public function selectHostFeePercent()
    {
        $this->selectField('hostFeePercent');
        return $this;
    }

    public function selectPlatformFeePercent()
    {
        $this->selectField('platformFeePercent');
        return $this;
    }

    public function selectApprovedAt()
    {
        $this->selectField('approvedAt');
        return $this;
    }

    public function selectIsApproved()
    {
        $this->selectField('isApproved');
        return $this;
    }

    public function selectTotalFinancialContributors()
    {
        $this->selectField('totalFinancialContributors');
        return $this;
    }

    public function selectTiers(EventTiersArgumentsObject $argsObject = null)
    {
        $object = new TierCollectionQueryObject('tiers');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectContributors(EventContributorsArgumentsObject $argsObject = null)
    {
        $object = new ContributorCollectionQueryObject('contributors');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPlatformContributionAvailable()
    {
        $this->selectField('platformContributionAvailable');
        return $this;
    }

    /**
     * @deprecated 2020/04/09 - Should not have been introduced. Use stats.balance.value
     */
    public function selectBalance()
    {
        $this->selectField('balance');
        return $this;
    }

    public function selectContributionPolicy()
    {
        $this->selectField('contributionPolicy');
        return $this;
    }

    public function selectParent(EventParentArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('parent');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    /**
     * @deprecated 2020/07/01 - Use parent instead.
     */
    public function selectParentCollective(EventParentCollectiveArgumentsObject $argsObject = null)
    {
        $object = new CollectiveQueryObject('parentCollective');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectStartsAt()
    {
        $this->selectField('startsAt');
        return $this;
    }

    public function selectEndsAt()
    {
        $this->selectField('endsAt');
        return $this;
    }

    public function selectTimezone()
    {
        $this->selectField('timezone');
        return $this;
    }
}
