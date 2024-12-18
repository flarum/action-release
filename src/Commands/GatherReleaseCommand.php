<?php

namespace Flarum\Release\Commands;

use Flarum\Release\GitHub\Change;
use Flarum\Release\MarkdownWriter;
use Flarum\Release\Release;
use Illuminate\Support\Collection;
use NumberFormatter;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'gather-release',
    description: 'Gathers the information for the release'
)]
class GatherReleaseCommand extends Command
{
    protected function configure()
    {
        $this
            ->addOption('local', null, InputOption::VALUE_OPTIONAL, 'Only output the result locally', false)
            ->addOption('major', null, InputOption::VALUE_OPTIONAL, 'Major release', false)
            ->addOption('stability', null, InputOption::VALUE_OPTIONAL, 'Stability', 'stable');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (empty(env('GITHUB_TOKEN')) && empty(env('INPUT_GITHUB_TOKEN'))) {
            $output->writeln('No GitHub token provided');

            return Command::FAILURE;
        }

        $release = new Release(
            branch: env('BRANCH'),
            major: $input->hasOption('major'),
            stability: $input->getOption('stability')
        );

        if (env('NEXT_TAG')) {
            $release->setTag(env('NEXT_TAG'));
        } elseif (env('INPUT_NEXT_TAG')) {
            $release->setTag(env('INPUT_NEXT_TAG'));
        }

        // Retrieve the commits once.
        $changelog = $release->changelog();

        $writer = new MarkdownWriter($release->nextTag());

        $writer->header("Release {$release->nextTag()}");

        $writer->divider();

        $writer->header('Contributors', 2);

        $changelog
            ->contributors
            ->countBy('login')
            ->sortDesc()
            ->tap(fn ($contributors) => $writer->comment("{$contributors->sum()} commits, {$contributors->count()} contributors"))
            ->each(fn ($count, $login) => $writer->li("user $login, commits $count"));

        $writer->divider();

        $writer->header('Reporters', 2);

        $changelog
            ->reporters
            ->countBy('login')
            ->sortDesc()
            ->tap(fn ($reporters) => $writer->comment("{$reporters->sum()} commits, {$reporters->count()} reporters"))
            ->each(fn ($count, $login) => $writer->li("user $login, reports $count"));

        $writer->divider();

        $compare = "https://github.com/".Release::REPOSITORY."/compare/{$release->lastTag()->name}...{$release->nextTag()}";
        $writer->header("[{$release->nextTag()}]($compare)", 2);

        $changelog
            ->changes
            ->unique('message')
            ->filter(fn (Change $change) => $change->shouldBeLogged())
            ->sortBy('message')
            ->groupBy('type')
            ->each(function (Collection $set, string $key) use ($writer) {
                $writer->header($key, 3);

                $set->each(fn ($change) => $writer->li("$change"));
            });

        if (! empty(env('OPEN_COLLECTIVE_TOKEN')) || ! empty(env('INPUT_OPEN_COLLECTIVE_TOKEN'))) {
            $writer->divider();

            $writer->header('Donations', 2);

            $release
                ->donations()
                ->filter(fn($backer) => $backer->is_private === false)
                ->sortByDesc('amount')
                ->each(function ($backer) use ($writer) {
                    $money = $this->formatMoney($backer->amount / 100, $backer->currency);

                    $writer->li("{$backer->name}: $money");
                });
        } else {
            $output->writeln('No Open Collective token provided, skipping donations');
        }

        $writer->close();

        if ($input->hasOption('local')) {
            $output->writeln((string) $writer);
        } else {
            $release->publish($writer);
        }

        return Command::SUCCESS;
    }

    protected function formatMoney($value, string $currency)
    {
        return (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($value, $currency);
    }
}
