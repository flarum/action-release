<?php

namespace Flarum\Release\OpenCollective;

use Carbon\Carbon;
use Flarum\Release\GraphQL\OpenCollective\AccountReferenceInputInputObject;
use Flarum\Release\GraphQL\OpenCollective\RootQueryObject;
use Flarum\Release\GraphQL\OpenCollective\RootTransactionsArgumentsObject;
use Flarum\Release\GraphQL\OpenCollective\TransactionTypeEnumObject;
use Flarum\Release\Release;
use Illuminate\Support\Collection;

class Contributions
{
    protected Collection $contributions;

    public function __construct(protected Release $release)
    {
        $this->contributions = $this->retrieve();
    }

    protected function retrieve(): Collection
    {
        $queryTransactions = (new RootTransactionsArgumentsObject())
            ->setType(TransactionTypeEnumObject::CREDIT)
            ->setAccount([(new AccountReferenceInputInputObject)->setSlug('flarum')])
            ->setDateFrom(Carbon::parse($this->release->lastTag()->time))
            ->setDateTo(Carbon::now());

        $transactions = (new RootQueryObject)
            ->selectTransactions($queryTransactions)
            ->selectAmount();

//        $transactions = (new Query('transactions'))
//            ->setVariables([
//                new Variable('type', 'Enum', true, 'CREDIT')
//            ])
//            ->setArguments(['type' => 'CREDIT'])
//            ->setSelectionSet(['amount']);
//
//        $account = (new QueryBuilder('account'))
//            ->setArgument('slug', 'flarum')
//            ->selectField('name')
//            ->selectField($transactions);

        $response = $this->release
            ->openCollective
            ->runQuery($transactions);

        dd($response->getData());
    }
}