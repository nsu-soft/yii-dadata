<?php

namespace nsusoft\dadata\dto\clean;

use nsusoft\dadata\dto\DtoInterface;

class MetroStationDto implements DtoInterface
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $line;
    /**
     * @var float
     */
    public $distance;
}