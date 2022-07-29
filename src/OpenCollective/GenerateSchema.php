<?php

namespace Flarum\Release\OpenCollective;

use Flarum\Release\Release;
use GraphQL\SchemaGenerator\SchemaClassGenerator;

class GenerateSchema
{
    public function __construct(protected Release $release)
    {
        $this->generate();
    }

    protected function generate()
    {
        $generator = new SchemaClassGenerator(
            $this->release->openCollective,
            __DIR__ . '/../GraphQL/OpenCollective/',
            'Flarum\\Release\\GraphQL\\OpenCollective'
        );

        $generator->generateRootObjects();
    }
}