<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

class FmsUnitDto implements DtoInterface
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
    /**
     * @var int|null
     */
    public $type;
}