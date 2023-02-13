# Full Name Faker

PHP library that generates fake user full name

## Требования

PHP >= 8.0

## Установка

```sh
composer require vppavlenko/name-faker
```
## Использование

```php
<?php

require_once 'vendor/autoload.php';

$faker = \Vppavlenko\NameFaker\FakerBuilder::create();
echo $faker->fullName; //Иванов Степан Сергеевич
```
