<?php

namespace Flarum\Release\GraphQL\OpenCollective;

interface AccountInterfaceObject
{
    public const OBJECT_NAME = 'Account';

    function selectId();

    /**
     * @deprecated 2020-01-01: should only be used during the transition to GraphQL API v2.
     */
    function selectLegacyId();

    function selectSlug();

    function selectType();

    function selectName();

    function selectLegalName();

    function selectDescription();

    function selectLongDescription();

    function selectTags();

    function selectWebsite();

    function selectTwitterHandle();

    /**
     * @deprecated 2022-06-03: Please use repositoryUrl
     */
    function selectGithubHandle();

    function selectRepositoryUrl();

    function selectCurrency();

    function selectExpensePolicy();

    function selectIsIncognito();

    function selectImageUrl();

    function selectBackgroundImageUrl();

    function selectCreatedAt();

    function selectUpdatedAt();

    function selectIsArchived();

    function selectIsFrozen();

    function selectIsActive();

    function selectIsHost();

    function selectIsAdmin();

    function selectParentAccount(AccountParentAccountArgumentsObject $argsObject = null);

    function selectMembers(AccountMembersArgumentsObject $argsObject = null);

    function selectMemberInvitations(AccountMemberInvitationsArgumentsObject $argsObject = null);

    function selectMemberOf(AccountMemberOfArgumentsObject $argsObject = null);

    function selectEmails();

    function selectTransactions(AccountTransactionsArgumentsObject $argsObject = null);

    function selectOrders(AccountOrdersArgumentsObject $argsObject = null);

    function selectSettings();

    function selectConversations(AccountConversationsArgumentsObject $argsObject = null);

    function selectConversationsTags(AccountConversationsTagsArgumentsObject $argsObject = null);

    function selectExpensesTags(AccountExpensesTagsArgumentsObject $argsObject = null);

    function selectTransferwise(AccountTransferwiseArgumentsObject $argsObject = null);

    function selectPayoutMethods(AccountPayoutMethodsArgumentsObject $argsObject = null);

    function selectPaymentMethods(AccountPaymentMethodsArgumentsObject $argsObject = null);

    function selectConnectedAccounts(AccountConnectedAccountsArgumentsObject $argsObject = null);

    function selectOAuthApplications(AccountOAuthApplicationsArgumentsObject $argsObject = null);

    function selectLocation(AccountLocationArgumentsObject $argsObject = null);

    function selectCategories();

    function selectStats(AccountStatsArgumentsObject $argsObject = null);

    function selectUpdates(AccountUpdatesArgumentsObject $argsObject = null);

    function selectFeatures(AccountFeaturesArgumentsObject $argsObject = null);

    function selectVirtualCards(AccountVirtualCardsArgumentsObject $argsObject = null);

    function selectVirtualCardMerchants(AccountVirtualCardMerchantsArgumentsObject $argsObject = null);

    function selectChildrenAccounts(AccountChildrenAccountsArgumentsObject $argsObject = null);

    function selectPolicies(AccountPoliciesArgumentsObject $argsObject = null);

    function selectActivitySubscriptions(AccountActivitySubscriptionsArgumentsObject $argsObject = null);
}
