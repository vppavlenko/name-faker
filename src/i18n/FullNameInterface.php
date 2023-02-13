<?php

namespace Vppavlenko\NameFaker\i18n;

interface FullNameInterface
{
    public function getFirstName(): array;

    public function getMiddleName(): array;

    public function getLastName(): array;
}
