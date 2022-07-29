<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class ProjectQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = 'Project';

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

    public function selectParentAccount(ProjectParentAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('parentAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMembers(ProjectMembersArgumentsObject $argsObject = null)
    {
        $object = new MemberCollectionQueryObject('members');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberInvitations(ProjectMemberInvitationsArgumentsObject $argsObject = null)
    {
        $object = new MemberInvitationQueryObject('memberInvitations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberOf(ProjectMemberOfArgumentsObject $argsObject = null)
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

    public function selectTransactions(ProjectTransactionsArgumentsObject $argsObject = null)
    {
        $object = new TransactionCollectionQueryObject('transactions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOrders(ProjectOrdersArgumentsObject $argsObject = null)
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

    public function selectConversations(ProjectConversationsArgumentsObject $argsObject = null)
    {
        $object = new ConversationCollectionQueryObject('conversations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConversationsTags(ProjectConversationsTagsArgumentsObject $argsObject = null)
    {
        $object = new TagStatQueryObject('conversationsTags');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectExpensesTags(ProjectExpensesTagsArgumentsObject $argsObject = null)
    {
        $object = new TagStatQueryObject('expensesTags');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTransferwise(ProjectTransferwiseArgumentsObject $argsObject = null)
    {
        $object = new TransferWiseQueryObject('transferwise');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPayoutMethods(ProjectPayoutMethodsArgumentsObject $argsObject = null)
    {
        $object = new PayoutMethodQueryObject('payoutMethods');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPaymentMethods(ProjectPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new PaymentMethodQueryObject('paymentMethods');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConnectedAccounts(ProjectConnectedAccountsArgumentsObject $argsObject = null)
    {
        $object = new ConnectedAccountQueryObject('connectedAccounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOAuthApplications(ProjectOAuthApplicationsArgumentsObject $argsObject = null)
    {
        $object = new OAuthApplicationCollectionQueryObject('oAuthApplications');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectLocation(ProjectLocationArgumentsObject $argsObject = null)
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

    public function selectStats(ProjectStatsArgumentsObject $argsObject = null)
    {
        $object = new AccountStatsQueryObject('stats');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUpdates(ProjectUpdatesArgumentsObject $argsObject = null)
    {
        $object = new UpdateCollectionQueryObject('updates');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFeatures(ProjectFeaturesArgumentsObject $argsObject = null)
    {
        $object = new CollectiveFeaturesQueryObject('features');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVirtualCards(ProjectVirtualCardsArgumentsObject $argsObject = null)
    {
        $object = new VirtualCardCollectionQueryObject('virtualCards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectVirtualCardMerchants(ProjectVirtualCardMerchantsArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('virtualCardMerchants');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectChildrenAccounts(ProjectChildrenAccountsArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('childrenAccounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPolicies(ProjectPoliciesArgumentsObject $argsObject = null)
    {
        $object = new PoliciesQueryObject('policies');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectActivitySubscriptions(ProjectActivitySubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new ActivitySubscriptionQueryObject('activitySubscriptions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectWebhooks(ProjectWebhooksArgumentsObject $argsObject = null)
    {
        $object = new WebhookCollectionQueryObject('webhooks');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPermissions(ProjectPermissionsArgumentsObject $argsObject = null)
    {
        $object = new AccountPermissionsQueryObject('permissions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHost(ProjectHostArgumentsObject $argsObject = null)
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

    public function selectTiers(ProjectTiersArgumentsObject $argsObject = null)
    {
        $object = new TierCollectionQueryObject('tiers');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectContributors(ProjectContributorsArgumentsObject $argsObject = null)
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

    public function selectParent(ProjectParentArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('parent');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
