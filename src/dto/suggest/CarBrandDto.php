<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/car_brand/
 */
class CarBrandDto implements DtoInterface
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
    public $id;
    /**
     * @var string|null
     */
    public $name;
    /**
     * @var string|null
     */
    public $nameRu;
}