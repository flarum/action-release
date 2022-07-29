<?php

namespace Flarum\Release\OpenCollective;

use Flarum\Release\Donations as Collection;
use Flarum\Release\Release;
use GraphQL\QueryBuilder\QueryBuilder;
use GraphQL\RawObject;

/**
 * @mixin Collection
 */
class Donations
{
    protected Collection $donations;

    public function __construct(protected Release $release)
    {
        $this->donations = $this->retrieve();
    }

    protected function retrieve(): Collection
    {
        $transactions = (new QueryBuilder('transactions'))
            ->setArgument('dateFrom', $this->release->lastTag()->time)
            ->setArgument('type', new RawObject('CREDIT'))
            ->setArgument('kind', new RawObject('CONTRIBUTION'))
            ->setArgument('account', new RawObject('{slug: "flarum"}'))
            ->selectField($this->transaction());

        $response = $this->release
            ->openCollective
            ->runQuery($transactions);

        return Collection::makeFromOpenCollective($response->getData()->transactions->nodes ?? []);
    }

    protected function transaction(): QueryBuilder
    {
        return (new QueryBuilder('nodes'))
            ->selectField((new QueryBuilder('fromAccount'))
                ->selectField('name')
                ->selectField('slug')
                ->selectField('type')
                ->selectField('website')
                ->selectField('twitterHandle')
                ->selectField('githubHandle')
                ->selectField('isIncognito')
                ->selectField('isArchived')
            )
            ->selectField((new QueryBuilder('amount'))
                ->selectField('value')
                ->selectField('currency')
            )
            ->selectField('createdAt');
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->donations, $name], $arguments);
    }
}