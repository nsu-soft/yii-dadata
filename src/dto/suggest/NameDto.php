<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

class NameDto implements DtoInterface
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $unrestrictedValue;
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
    /**
     * @var string|null
     */
    public $gender;
    /**
     * @var int|null
     */
    public $qualityCheck;
}