<?php

declare(strict_types=1);

namespace Vppavlenko\NameFaker;

use Vppavlenko\NameFaker\Generator\FullName;

class Faker
{
    private FullName $generator;

    public function __construct(FullName $generator)
    {
        $this->generator = $generator;
    }

    public function __get($attribute)
    {
        return $this->generator->generate($attribute);
    }
}
