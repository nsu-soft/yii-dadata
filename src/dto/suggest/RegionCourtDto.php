<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/region_court/
 */
class RegionCourtDto implements DtoInterface
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
    public $code;
    /**
     * @var string|null
     */
    public $name;
    /**
     * @var string|null
     */
    public $regionCode;
}