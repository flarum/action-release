<?php

namespace Flarum\Release\OpenCollective;

use Flarum\Release\Release;
use GraphQL\QueryBuilder\QueryBuilder;
use GraphQL\RawObject;
use Illuminate\Support\Collection;

/**
 * @mixin Collection
 */
class Contributions
{
    protected Collection $contributions;

    public function __construct(protected Release $release)
    {
        $this->contributions = $this->retrieve();
    }

    protected function retrieve(): Collection
    {
        $transactions = (new QueryBuilder('transactions'))
            ->setArgument('dateFrom', $this->release->lastTag()->time)
            ->setArgument('type', new RawObject('CREDIT'))
            ->setArgument('account', new RawObject('{slug: "flarum"}'))
            ->selectField($this->transaction());

        $response = $this->release
            ->openCollective
            ->runQuery($transactions);

        return (new Collection($response->getData()->transactions->nodes ?? []))
            ->filter(fn ($backer) => !$backer->fromAccount->isIncognito && !$backer->fromAccount->isArchived);
    }

    protected function transaction(): QueryBuilder
    {
        return (new QueryBuilder('nodes'))
            ->selectField((new QueryBuilder('fromAccount'))
                ->selectField('name')
                ->selectField('type')
                ->selectField('website')
                ->selectField('twitterHandle')
                ->selectField('githubHandle')
                ->selectField('isIncognito')
                ->selectField('isArchived')
            )
            ->selectField((new QueryBuilder('amountInHostCurrency'))
                ->selectField('value')
                ->selectField('currency')
            )
            ->selectField('createdAt');
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->contributions, $name], $arguments);
    }
}