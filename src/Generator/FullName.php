<?php

declare(strict_types=1);

namespace Vppavlenko\NameFaker\Generator;

use Vppavlenko\NameFaker\i18n\FullNameInterface;

class FullName
{

    private FullNameInterface $locale;

    public function setLocale(string $localeCode): static
    {
        $localeClass = 'Vppavlenko\\NameFaker\\i18n\\' . $localeCode . '\\FullName';

        if (class_exists($localeClass)) {
            $this->locale = new $localeClass;
        }

        return $this;
    }

    public function fullName(): string
    {
        $firstNames = $this->locale->getFirstName();
        $middleNames = $this->locale->getMiddleName();
        $lastNames = $this->locale->getLastName();
        shuffle($firstNames);
        shuffle($middleNames);
        shuffle($lastNames);

        return sprintf('%s %s %s', $lastNames[0], $firstNames[0], $middleNames[0]);
    }

    public function generate($attribute): string
    {
        if (method_exists($this, $attribute)) {
            return $this->$attribute();
        }

        return '';
    }
}
