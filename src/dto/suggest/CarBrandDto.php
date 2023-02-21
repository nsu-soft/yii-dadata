<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

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