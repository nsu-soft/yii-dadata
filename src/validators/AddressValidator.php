<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\helpers\DadataHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;
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
     * @param $value
     * @return array|null
     */
    public function validateValue($value): ?array
    {
        $address = DadataHelper::cleanAddress($value);

        if (CleanAddressInterface::QC_CODE_TRASH == $address->getQualityCheck()) {
            return [Module::t('main', "Incorrect address."), []];
        }

        if (in_array($address->getQualityCheck(), [CleanAddressInterface::QC_CODE_UNKNOWN, CleanAddressInterface::QC_CODE_MULTIPLE])) {
            return [Module::t('main', "Please specify the address."), []];
        }

        if (is_null($this->precision) && is_null($this->minPrecision) && CleanAddressInterface::QC_CODE_OK == $address->getQualityCheck()) {
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
     * @param CleanAddressInterface $address Standard address.
     * @return array|null
     */
    private function validatePrecision(CleanAddressInterface $address): ?array
    {
        if (in_array($this->precision, $this->getPrecisionCodes()) && $address->getFiasLevel() === $this->precision) {
            return null;
        }

        return [Module::t('main', "Incorrect address precision."), []];
    }

    /**
     * @param CleanAddressInterface $address Standard address.
     * @return array|null
     */
    private function validateMinPrecision(CleanAddressInterface $address): ?array
    {
        $structure = $this->getPrecisionsStructure();
        $addressPrecision = $address->getFiasLevel();

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