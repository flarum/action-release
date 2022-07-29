<?php

namespace Flarum\Release;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class Donations extends Collection
{
    public static function makeFromOpenCollective(array $items): static
    {
        $collect = new static;

        foreach ($items as $item) {
            $collect->putFromOpenCollective($item);
        }

        return $collect;
    }
    
    public function putFromOpenCollective($item)
    {
        $this->push((object) [
            'created_at' => Carbon::parse($item->createdAt),
            'is_private' => $item->fromAccount->isIncognito || $item->fromAccount->isArchived,
            'login' => $item->fromAccount->slug,
            'name' => $item->fromAccount->name ?? $item->fromAccount->slug,
            'amount' => $item->amount->value * 100,
            'currency' => $item->amount->currency
        ]);
    }

    public static function makeFromGitHub(array $items): static
    {
        $collect = new static;

        foreach ($items as $item) {
            $collect->putFromGitHub($item);
        }

        return $collect;
    }
    
    public function putFromGitHub($item)
    {
        $this->push((object) [
            'created_at' => Carbon::parse($item->createdAt),
            'is_private' => $item->privacyLevel !== 'PUBLIC',
            'login' => $item->sponsorEntity->login,
            'name' => $item->sponsorEntity->name ?? $item->sponsorEntity->login,
            'amount' => $item->tier->monthlyPriceInCents,
            'currency' => 'USD'
        ]);
    }
}