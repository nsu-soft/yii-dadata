<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/country/
 */
class CountryDto implements DtoInterface
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
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $alfa2;
    /**
     * @var string
     */
    public $alfa3;
    /**
     * @var string
     */
    public $nameShort;
    /**
     * @var string
     */
    public $name;
}