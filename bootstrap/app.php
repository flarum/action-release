<?php

namespace Flarum\Release;

use Symfony\Component\Console\Application;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv;
$dotenv->load(__DIR__ . '/../.env');

$app = new Application(
    'Flarum Release'
);

$app->add(new Commands\GatherReleaseCommand);

return $app;