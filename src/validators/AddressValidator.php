<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\dto\clean\address\AddressDto;
use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\AddressQualityCheck;
use yii\validators\Validator;

/**
 * Validates address using the DaData cleaning API.
 *
 * Usage:
 * ```
 * public function rules(): array
 * {
 *     return [
 *         [['mainAddress'], AddressValidator::class, 'maxPrecision' => AddressValidator::PRECISION_COUNTRY, 'minPrecision' => AddressValidator::PRECISION_BUILDING],
 *         [['legalAddress'], AddressValidator::class, 'precision' => [AddressValidator::PRECISION_STREET, AddressValidator::PRECISION_BUILDING, AddressValidator::PRECISION_ROOM]],
 *     ];
 * }
 * ```
 */
class AddressValidator extends Validator
{
    /**
     * Address precision. It's equal with FIAS level.
     */
    const PRECISION_COUNTRY = 0;
    const PRECISION_REGION = 1;
    const PRECISION_AREA = 3;
    const PRECISION_CITY = 4;
    const PRECISION_DISTRICT = 5;
    const PRECISION_SETTLEMENT = 6;
    const PRECISION_STREET = 7;
    const PRECISION_BUILDING = 8;
    const PRECISION_ROOM = 9;
    const PRECISION_PLAN_STRUCTURE = 65;
    const PRECISION_LAND_PLOT = 75;
    const PRECISION_ADDITIONAL_TERRITORY = 90;
    const PRECISION_ADDITIONAL_TERRITORY_STREET = 91;
    const PRECISION_FOREIGN = -1;

    /**
     * @var array|int Address should be equal with FIAS level.
     */
    public $precision = [];

    /**
     * @var int Maximum (by square) FIAS level for address.
     */
    public $maxPrecision;

    /**
     * @var int Minimum (by square) FIAS level for address.
     */
    public $minPrecision;

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if (!empty($this->precision) && !is_array($this->precision)) {
            $this->precision = [$this->precision];
        }
    }

    /**
     * @inheritDoc
     * @param string $value
     * @return array|null
     */
    public function validateValue($value): ?array
    {
        $address = CleanHelper::address($value);

        if (AddressQualityCheck::TRASH == $address->qualityCheck) {
            return [Module::t('main', "Incorrect address."), []];
        }

        if (in_array($address->qualityCheck, [AddressQualityCheck::UNKNOWN, AddressQualityCheck::MULTIPLE])) {
            return [Module::t('main', "Please specify the address."), []];
        }

        if (!empty($this->precision) && !$this->validatePrecision($address)) {
            return [Module::t('main', "Incorrect address precision."), []];
        }

        if (isset($this->maxPrecision) && !$this->validateMaxPrecision($address)) {
            return [Module::t('main', "Incorrect address precision."), []];
        }

        if (isset($this->minPrecision) && !$this->validateMinPrecision($address)) {
            return [Module::t('main', "Incorrect address precision."), []];
        }

        return null;
    }

    /**
     * @param AddressDto $address
     * @return bool
     */
    private function validatePrecision(AddressDto $address): bool
    {
        return in_array($address->fiasLevel, $this->precision);
    }

    /**
     * @param AddressDto $address
     * @return bool
     */
    private function validateMaxPrecision(AddressDto $address): bool
    {
        $structure = [
            self::PRECISION_COUNTRY => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
                self::PRECISION_PLAN_STRUCTURE,
                self::PRECISION_LAND_PLOT,
                self::PRECISION_ADDITIONAL_TERRITORY,
                self::PRECISION_ADDITIONAL_TERRITORY_STREET,
            ],
            self::PRECISION_REGION => [
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
                self::PRECISION_PLAN_STRUCTURE,
                self::PRECISION_LAND_PLOT,
                self::PRECISION_ADDITIONAL_TERRITORY,
                self::PRECISION_ADDITIONAL_TERRITORY_STREET,
            ],
            self::PRECISION_AREA => [
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
                self::PRECISION_PLAN_STRUCTURE,
                self::PRECISION_LAND_PLOT,
                self::PRECISION_ADDITIONAL_TERRITORY,
                self::PRECISION_ADDITIONAL_TERRITORY_STREET,
            ],
            self::PRECISION_CITY => [
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
                self::PRECISION_PLAN_STRUCTURE,
                self::PRECISION_LAND_PLOT,
            ],
            self::PRECISION_DISTRICT => [
                self::PRECISION_DISTRICT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
                self::PRECISION_PLAN_STRUCTURE,
                self::PRECISION_LAND_PLOT,
            ],
            self::PRECISION_SETTLEMENT => [
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
                self::PRECISION_PLAN_STRUCTURE,
                self::PRECISION_LAND_PLOT,
            ],
            self::PRECISION_STREET => [
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
                self::PRECISION_PLAN_STRUCTURE,
                self::PRECISION_LAND_PLOT,
            ],
            self::PRECISION_BUILDING => [self::PRECISION_BUILDING, self::PRECISION_ROOM],
            self::PRECISION_ROOM => [self::PRECISION_ROOM],
            self::PRECISION_PLAN_STRUCTURE => [self::PRECISION_PLAN_STRUCTURE],
            self::PRECISION_LAND_PLOT => [self::PRECISION_LAND_PLOT],
            self::PRECISION_ADDITIONAL_TERRITORY => [self::PRECISION_ADDITIONAL_TERRITORY, self::PRECISION_ADDITIONAL_TERRITORY_STREET],
            self::PRECISION_ADDITIONAL_TERRITORY_STREET => [self::PRECISION_ADDITIONAL_TERRITORY_STREET],
            self::PRECISION_FOREIGN => [self::PRECISION_FOREIGN],
        ];

        return in_array($address->fiasLevel, $structure[$this->maxPrecision]);
    }

    /**
     * @param AddressDto $address
     * @return bool
     */
    private function validateMinPrecision(AddressDto $address): bool
    {
        $structure = [
            self::PRECISION_COUNTRY => [self::PRECISION_COUNTRY],
            self::PRECISION_REGION => [self::PRECISION_COUNTRY, self::PRECISION_REGION],
            self::PRECISION_AREA => [self::PRECISION_COUNTRY, self::PRECISION_REGION, self::PRECISION_AREA],
            self::PRECISION_CITY => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
            ],
            self::PRECISION_DISTRICT => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
            ],
            self::PRECISION_SETTLEMENT => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_SETTLEMENT,
            ],
            self::PRECISION_STREET => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
            ],
            self::PRECISION_BUILDING => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
            ],
            self::PRECISION_ROOM => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_BUILDING,
                self::PRECISION_ROOM,
            ],
            self::PRECISION_PLAN_STRUCTURE => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_PLAN_STRUCTURE,
            ],
            self::PRECISION_LAND_PLOT => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_CITY,
                self::PRECISION_DISTRICT,
                self::PRECISION_SETTLEMENT,
                self::PRECISION_STREET,
                self::PRECISION_LAND_PLOT,
            ],
            self::PRECISION_ADDITIONAL_TERRITORY => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_ADDITIONAL_TERRITORY,
            ],
            self::PRECISION_ADDITIONAL_TERRITORY_STREET => [
                self::PRECISION_COUNTRY,
                self::PRECISION_REGION,
                self::PRECISION_AREA,
                self::PRECISION_ADDITIONAL_TERRITORY,
                self::PRECISION_ADDITIONAL_TERRITORY_STREET,
            ],
            self::PRECISION_FOREIGN => [self::PRECISION_FOREIGN],
        ];

        return in_array($address->fiasLevel, $structure[$this->minPrecision]);
    }
}