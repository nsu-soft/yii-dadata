<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\helpers\DadataHelper;
use nsusoft\dadata\Module;
use Psr\SimpleCache\InvalidArgumentException;
use yii\base\InvalidConfigException;
use yii\validators\Validator;

class AddressValidator extends Validator
{
    /**
     * Quality check
     * @link https://dadata.ru/api/clean/address/#qc
     */
    const QC_CODE_OK = 0;
    const QC_CODE_UNKNOWN = 1;
    const QC_CODE_TRASH = 2;
    const QC_CODE_MULTIPLE = 3;

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
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     * @throws CacheException
     */
    public function validateValue($value): ?array
    {
        $standardAddress = DadataHelper::cleanAddress($value);

        if (self::QC_CODE_TRASH == $standardAddress['qc']) {
            return [Module::t('main', "Incorrect address."), []];
        }

        if (in_array($standardAddress['qc'], [self::QC_CODE_UNKNOWN, self::QC_CODE_MULTIPLE])) {
            return [Module::t('main', "Please specify the address."), []];
        }

        if (is_null($this->precision) && is_null($this->minPrecision) && self::QC_CODE_OK == $standardAddress['qc']) {
            return null;
        }

        if (isset($this->precision)) {
            return $this->validatePrecision($standardAddress);
        }

        if (isset($this->minPrecision)) {
            return $this->validateMinPrecision($standardAddress);
        }

        return null;
    }

    /**
     * @param array $address Standard address.
     * @return array|null
     */
    private function validatePrecision(array $address): ?array
    {
        if (in_array($this->precision, $this->getPrecisionCodes()) && $address['fias_level'] === $this->precision) {
            return null;
        }

        return [Module::t('main', "Incorrect address precision."), []];
    }

    /**
     * @param array $address Standard address.
     * @return array|null
     */
    private function validateMinPrecision(array $address): ?array
    {
        $structure = $this->getPrecisionsStructure();
        $addressPrecision = $address['fias_level'];

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