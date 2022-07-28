<?php

namespace Flarum\Release\Commands;

use Flarum\Release\Release;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GatherReleaseCommand extends Command
{
    protected static $defaultName = 'gather-release';
    protected static $defaultDescription = 'Gathers the information for the release';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $release = new Release;

        dd($release->lastTag());
    }
}