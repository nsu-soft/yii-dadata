<?php

namespace nsusoft\dadata\dto\clean;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/clean/passport/
 */
class PassportDto implements DtoInterface
{
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $series;
    /**
     * @var string
     */
    public $number;
    /**
     * @var int
     */
    public $qualityCheck;
}