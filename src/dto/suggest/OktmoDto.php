<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/oktmo/
 */
class OktmoDto implements DtoInterface
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
    public $oktmo;
    /**
     * @var string|null
     */
    public $areaType;
    /**
     * @var string|null
     */
    public $areaCode;
    /**
     * @var string|null
     */
    public $area;
    /**
     * @var string|null
     */
    public $subAreaType;
    /**
     * @var string|null
     */
    public $subAreaCode;
    /**
     * @var string|null
     */
    public $subArea;
}