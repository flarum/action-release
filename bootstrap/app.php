<?php

namespace Flarum\Release;

use Dotenv\Dotenv;
use Symfony\Component\Console\Application;

file_exists(__DIR__ . '/../.env') && Dotenv::createImmutable(__DIR__ . '/..')->safeLoad();

$app = new Application(
    'Flarum Release'
);

$app->add(new Commands\GatherReleaseCommand);

return $app;
