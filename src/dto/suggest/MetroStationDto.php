<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

class MetroStationDto implements DtoInterface
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
    public $cityKladrId;
    /**
     * @var string|null
     */
    public $cityFiasId;
    /**
     * @var string|null
     */
    public $city;
    /**
     * @var string|null
     */
    public $name;
    /**
     * @var string|null
     */
    public $lineId;
    /**
     * @var string|null
     */
    public $lineName;
    /**
     * @var string|null
     */
    public $latitude;
    /**
     * @var string|null
     */
    public $longitude;
    /**
     * @var string|null
     */
    public $color;
    /**
     * @var bool
     */
    public $isClosed;
}