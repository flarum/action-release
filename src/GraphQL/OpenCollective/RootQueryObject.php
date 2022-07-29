<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootQueryObject extends \GraphQL\SchemaObject\QueryObject
{
    public const OBJECT_NAME = '';

    public function selectAccount(RootAccountArgumentsObject $argsObject = null)
    {
        $object = new AccountQueryObject('account');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectAccounts(RootAccountsArgumentsObject $argsObject = null)
    {
        $object = new AccountCollectionQueryObject('accounts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectApplication(RootApplicationArgumentsObject $argsObject = null)
    {
        $object = new ApplicationQueryObject('application');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectCollective(RootCollectiveArgumentsObject $argsObject = null)
    {
        $object = new CollectiveQueryObject('collective');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectConversation(RootConversationArgumentsObject $argsObject = null)
    {
        $object = new ConversationQueryObject('conversation');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectEvent(RootEventArgumentsObject $argsObject = null)
    {
        $object = new EventQueryObject('event');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectExpense(RootExpenseArgumentsObject $argsObject = null)
    {
        $object = new ExpenseQueryObject('expense');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectExpenses(RootExpensesArgumentsObject $argsObject = null)
    {
        $object = new ExpenseCollectionQueryObject('expenses');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectFund(RootFundArgumentsObject $argsObject = null)
    {
        $object = new FundQueryObject('fund');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHost(RootHostArgumentsObject $argsObject = null)
    {
        $object = new HostQueryObject('host');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectHosts(RootHostsArgumentsObject $argsObject = null)
    {
        $object = new HostCollectionQueryObject('hosts');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectIndividual(RootIndividualArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('individual');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMemberInvitations(RootMemberInvitationsArgumentsObject $argsObject = null)
    {
        $object = new MemberInvitationQueryObject('memberInvitations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOrder(RootOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject('order');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOrders(RootOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderCollectionQueryObject('orders');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectOrganization(RootOrganizationArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject('organization');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectProject(RootProjectArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject('project');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTagStats(RootTagStatsArgumentsObject $argsObject = null)
    {
        $object = new TagStatsCollectionQueryObject('tagStats');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTier(RootTierArgumentsObject $argsObject = null)
    {
        $object = new TierQueryObject('tier');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectTransactions(RootTransactionsArgumentsObject $argsObject = null)
    {
        $object = new TransactionCollectionQueryObject('transactions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectUpdate(RootUpdateArgumentsObject $argsObject = null)
    {
        $object = new UpdateQueryObject('update');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectPaypalPlan(RootPaypalPlanArgumentsObject $argsObject = null)
    {
        $object = new PaypalPlanQueryObject('paypalPlan');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectLoggedInAccount(RootLoggedInAccountArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('loggedInAccount');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }

    public function selectMe(RootMeArgumentsObject $argsObject = null)
    {
        $object = new IndividualQueryObject('me');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);
        return $object;
    }
}
