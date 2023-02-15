<?php

namespace nsusoft\dadata\types\enums;

class LocationType extends BaseEnum
{
    const REGION = 'region_type_full';
    const AREA = 'area_type_full';
    const CITY = 'city_type_full';
    const SETTLEMENT = 'settlement_type_full';
    const STREET = 'street_type_full';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::REGION,
            self::AREA,
            self::CITY,
            self::SETTLEMENT,
            self::STREET,
        ];
    }
}