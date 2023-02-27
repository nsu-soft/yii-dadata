<?php

namespace nsusoft\dadata\dto\clean;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/clean/name/
 */
class NameDto implements DtoInterface
{
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $result;
    /**
     * @var string
     */
    public $resultGenitive;
    /**
     * @var string
     */
    public $resultDative;
    /**
     * @var string
     */
    public $resultAblative;
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
     * @var string
     */
    public $gender;
    /**
     * @var int
     */
    public $qualityCheck;
}