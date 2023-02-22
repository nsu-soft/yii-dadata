<?php

namespace nsusoft\dadata\dto\clean;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/clean/vehicle/
 */
class VehicleDto implements DtoInterface
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
    public $brand;
    /**
     * @var string
     */
    public $model;
    /**
     * @var int
     */
    public $qualityCheck;
}