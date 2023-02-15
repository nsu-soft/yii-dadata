<?php

namespace nsusoft\dadata\types\enums;

class Bound extends BaseEnum
{
    const COUNTY = 'country';
    const REGION = 'region';
    const AREA = 'area';
    const CITY = 'city';
    const SETTLEMENT = 'settlement';
    const STREET = 'street';
    const HOUSE = 'house';
    const FLAT = 'flat';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::COUNTY,
            self::REGION,
            self::AREA,
            self::CITY,
            self::SETTLEMENT,
            self::STREET,
            self::HOUSE,
            self::FLAT,
        ];
    }
}