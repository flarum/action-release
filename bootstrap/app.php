<?php

namespace Flarum\Release;

use Symfony\Component\Console\Application;
use Symfony\Component\Dotenv\Dotenv;

file_exists(__DIR__ . '/../.env') && (new Dotenv)->load(__DIR__ . '/../.env');

$app = new Application(
    'Flarum Release'
);

$app->add(new Commands\GatherReleaseCommand);

return $app;