<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\dto\clean\address\AddressDto;
use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\AddressQualityCheck;
use yii\validators\Validator;

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
     * @var int Address should be equal with FIAS level.
     */
    public $precision;

    /**
     * @var int Minimum FIAS level for address.
     */
    public $minPrecision;

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

        if (is_null($this->precision) && is_null($this->minPrecision) && AddressQualityCheck::OK == $address->qualityCheck) {
            return null;
        }

        if (isset($this->precision)) {
            return $this->validatePrecision($address);
        }

        if (isset($this->minPrecision)) {
            return $this->validateMinPrecision($address);
        }

        return null;
    }

    /**
     * @param AddressDto $address
     * @return array|null
     */
    private function validatePrecision(AddressDto $address): ?array
    {
        if (in_array($this->precision, $this->getPrecisionCodes()) && $address->fiasLevel === $this->precision) {
            return null;
        }

        return [Module::t('main', "Incorrect address precision."), []];
    }

    /**
     * @param AddressDto $address
     * @return array|null
     */
    private function validateMinPrecision(AddressDto $address): ?array
    {
        $structure = $this->getPrecisionsStructure();
        $addressPrecision = $address->fiasLevel;

        if (in_array($this->minPrecision, $this->getPrecisionCodes()) && $structure[$addressPrecision] >= $structure[$this->minPrecision]) {
            return null;
        }

        return [Module::t('main', "Incorrect address precision."), []];
    }

    /**
     * @return int[]
     */
    private function getPrecisionCodes(): array
    {
        return [
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
            self::PRECISION_FOREIGN,
        ];
    }

    /**
     * Hierarchy of precisions in flat structure.
     * @return int[]
     */
    private function getPrecisionsStructure(): array
    {
        return [
            self::PRECISION_FOREIGN => 0,
            self::PRECISION_COUNTRY => 0,
            self::PRECISION_REGION => 1,
            self::PRECISION_AREA => 2,
            self::PRECISION_CITY => 3,
            self::PRECISION_SETTLEMENT => 3,
            self::PRECISION_DISTRICT => 4,
            self::PRECISION_STREET => 4,
            self::PRECISION_BUILDING => 5,
            self::PRECISION_ROOM => 6,
            self::PRECISION_PLAN_STRUCTURE => 4,
            self::PRECISION_LAND_PLOT => 5,
            self::PRECISION_ADDITIONAL_TERRITORY => 4,
            self::PRECISION_ADDITIONAL_TERRITORY_STREET => 5,
        ];
    }
}