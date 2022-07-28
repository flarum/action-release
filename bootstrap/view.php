<?php

use Illuminate\Container\Container;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\View\FileViewFinder;

$viewFilesystem = (new FilesystemManager(Container::getInstance()))->build([
    'driver' => 'local',
    'root' => __DIR__ . '/../views/'
]);

$finder = new FileViewFinder($viewFilesystem, [__DIR__ . '/../views/']);