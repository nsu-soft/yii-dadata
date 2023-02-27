<?php

namespace nsusoft\dadata\dto\clean;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/clean/phone/
 */
class PhoneDto implements DtoInterface
{
    /**
     * @var string
     */
    public $source;
    /**
     * @var string|null
     */
    public $type;
    /**
     * @var string|null
     */
    public $phone;
    /**
     * @var string|null
     */
    public $countryCode;
    /**
     * @var string|null
     */
    public $cityCode;
    /**
     * @var string|null
     */
    public $number;
    /**
     * @var string|null
     */
    public $extension;
    /**
     * @var string|null
     */
    public $provider;
    /**
     * @var string|null
     */
    public $country;
    /**
     * @var string|null
     */
    public $region;
    /**
     * @var string|null
     */
    public $city;
    /**
     * @var string|null
     */
    public $timezone;
    /**
     * @var int
     */
    public $qualityCheckConflict;
    /**
     * @var int
     */
    public $qualityCheck;
}