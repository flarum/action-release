<?php

namespace Flarum\Release;

use Illuminate\Container\Container;
use Illuminate\Contracts\View\Factory;
use Symfony\Component\Console\Application;
use Symfony\Component\Dotenv\Dotenv;

$container = Container::getInstance();

$dotenv = new Dotenv;
$dotenv->load(__DIR__ . '/../.env');

$app = new Application(
    'Flarum Release'
);

$app->add(new Commands\GatherReleaseCommand);

return $app;