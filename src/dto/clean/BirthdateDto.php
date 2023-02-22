<?php

namespace nsusoft\dadata\dto\clean;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/clean/birthdate/
 */
class BirthdateDto implements DtoInterface
{
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $birthdate;
    /**
     * @var int
     */
    public $qualityCheck;
}