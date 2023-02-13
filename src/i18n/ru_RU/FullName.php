<?php

declare(strict_types=1);

namespace Vppavlenko\NameFaker\i18n\ru_RU;

use Vppavlenko\NameFaker\i18n\FullNameInterface;

class FullName implements FullNameInterface
{
    private array $firstName = [
        'Иван',
        'Федор',
        'Степан',
        'Владимир',
        'Григорий',
        'Егор',
    ];

    private array $middleName = [
        'Сергеевич',
        'Петрович',
        'Степанович',
        'Владимирович',
        'Иванович',
        'Егорович',
    ];

    private array $lastName = [
        'Сергеев',
        'Петров',
        'Степанов',
        'Владимиров',
        'Иванов',
        'Егоров',
    ];

    public function getFirstName(): array
    {
        return $this->firstName;
    }

    public function getMiddleName(): array
    {
        return $this->middleName;
    }

    public function getLastName(): array
    {
        return $this->lastName;
    }
}
