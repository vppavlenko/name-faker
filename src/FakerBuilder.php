<?php

declare(strict_types=1);

namespace Vppavlenko\NameFaker;

use Vppavlenko\NameFaker\Generator\FullName;

class FakerBuilder
{
    const DEFAULT_LOCALE = 'ru_RU';

    public static function create(): Faker
    {
        $generator = (new FullName())->setLocale(self::DEFAULT_LOCALE);
        return new Faker($generator);
    }
}
