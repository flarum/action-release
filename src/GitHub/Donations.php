<?php

namespace Flarum\Release\GitHub;

use Flarum\Release\Donations as Collection;
use Flarum\Release\Release;
use GraphQL\InlineFragment;
use GraphQL\QueryBuilder\QueryBuilder;

class Donations
{
    protected Collection $donations;

    public function __construct(protected Release $release)
    {
        $this->donations = $this->retrieve();
    }

    protected function retrieve(): Collection
    {
        $transactions = (new QueryBuilder('organization'))
            ->setArgument('login', 'flarum')
            ->selectField('name')
            ->selectField((new QueryBuilder('sponsorshipsAsMaintainer'))
                ->setArgument('first', 100)
                ->selectField((new QueryBuilder('nodes'))
                    ->selectField('createdAt')
                    ->selectField('isOneTimePayment')
                    ->selectField('privacyLevel')
                    ->selectField((new QueryBuilder('tier'))
                        ->selectField('name')
                        ->selectField('monthlyPriceInCents')
                        ->selectField('isCustomAmount')
                    )
                    ->selectField((new QueryBuilder('sponsorEntity'))
                        ->selectField((new InlineFragment('User'))
                            ->setSelectionSet(['name', 'login'])
                        )
                        ->selectField((new InlineFragment('Organization'))
                            ->setSelectionSet(['name', 'login'])
                        )
                    )
                )
            );

        $response = $this->release
            ->gitHubGraphQL
            ->runQuery($transactions);

        return Collection::makeFromGitHub($response->getData()->organization->sponsorshipsAsMaintainer->nodes ?? []);
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->donations, $name], $arguments);
    }
}