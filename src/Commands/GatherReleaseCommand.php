<?php

namespace Flarum\Release\Commands;

use Flarum\Release\MarkdownWriter;
use Flarum\Release\Release;
use Illuminate\Support\Collection;
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

        $writer = new MarkdownWriter($release->nextTag());

        $writer->header("Release {$release->nextTag()}");

        $writer->divider();

        $writer->header('Contributors', 2);

        $release
            ->changelog()
            ->contributors
            ->countBy('login')
            ->sortDesc()
            ->each(fn ($count, $login) => $writer->li("user $login, commits $count"));

        $writer->divider();

        $writer->header('Reporters', 2);

        $release
            ->changelog()
            ->reporters
            ->countBy('login')
            ->sortDesc()
            ->each(fn ($count, $login) => $writer->li("user $login, reports $count"));

        $writer->divider();

        $writer->header('Changes', 2);

        $release
            ->changelog()
            ->changes
            ->groupBy('type')
            ->each(function (Collection $set, string $key) use ($writer) {
                $writer->header($key, 3);

                $set->each(fn ($change) => $writer->li("$change"));
            });

        $writer->close();

        return Command::SUCCESS;
    }
}