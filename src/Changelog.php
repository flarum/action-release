<?php

namespace Flarum\Release;

use Illuminate\Support\Collection;

class Changelog
{
    public readonly Collection $reporters;
    public readonly Collection $contributors;
    public readonly Collection $changes;

    public function __construct()
    {
        $this->contributors = new Collection;
        $this->changes = new Collection;
        $this->reporters = new Collection;
    }
}