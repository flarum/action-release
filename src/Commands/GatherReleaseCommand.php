<?php

namespace Flarum\Release\Commands;

use Flarum\Release\MarkdownWriter;
use Flarum\Release\Release;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use NumberFormatter;
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

//        $writer->divider();
//
//        $writer->header('Contributors', 2);
//
//        $release
//            ->changelog()
//            ->contributors
//            ->countBy('login')
//            ->sortDesc()
//            ->each(fn ($count, $login) => $writer->li("user $login, commits $count"));
//
//        $writer->divider();
//
//        $writer->header('Reporters', 2);
//
//        $release
//            ->changelog()
//            ->reporters
//            ->countBy('login')
//            ->sortDesc()
//            ->each(fn ($count, $login) => $writer->li("user $login, reports $count"));
//
//        $writer->divider();
//
//        $compare = "https://github.com/".Release::REPOSITORY."/compare/{$release->lastTag()->name}...{$release->nextTag()}";
//        $writer->header("[{$release->nextTag()}]($compare)", 2);
//
//        $release
//            ->changelog()
//            ->changes
//            ->sortBy('message')
//            ->groupBy('type')
//            ->each(function (Collection $set, string $key) use ($writer) {
//                $writer->header($key, 3);
//
//                $set->each(fn ($change) => $writer->li("$change"));
//            });

        $writer->divider();

        $writer->header('Donations', 2);

        $release
            ->donations()
            ->sortBy('amountInHostCurrency.value')
            ->each(function ($backer) use ($writer) {
                $money = $this->formatMoney($backer->amountInHostCurrency->value, $backer->amountInHostCurrency->currency);

                $writer->li("{$backer->fromAccount->name}: $money");
            });


        $writer->close();

        return Command::SUCCESS;
    }

    protected function formatMoney($value, string $currency)
    {
        return (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($value, $currency);
    }
}