<?php

namespace nsusoft\dadata\dto\suggest\party;

use nsusoft\dadata\dto\DtoInterface;

class OwnerNameDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $surname;
    /**
     * @var string|null
     */
    public $name;
    /**
     * @var string|null
     */
    public $patronymic;
}