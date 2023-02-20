<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

class PostalUnitDto implements DtoInterface
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
    public $postalCode;
    /**
     * @var bool
     */
    public $isClosed;
    /**
     * @var string
     */
    public $typeCode;
    /**
     * @var string|null
     */
    public $address;
    /**
     * @var string|null
     */
    public $addressKladrId;
    /**
     * @var string|null
     */
    public $addressQualityCheck;
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
    public $scheduleMonday;
    /**
     * @var string|null
     */
    public $scheduleTuesday;
    /**
     * @var string|null
     */
    public $scheduleWednesday;
    /**
     * @var string|null
     */
    public $scheduleThursday;
    /**
     * @var string|null
     */
    public $scheduleFriday;
    /**
     * @var string|null
     */
    public $scheduleSaturday;
    /**
     * @var string|null
     */
    public $scheduleSunday;
}