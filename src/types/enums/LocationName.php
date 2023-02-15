<?php

namespace nsusoft\dadata\types\enums;

class LocationName extends BaseEnum
{
    const COUNTRY = 'country';
    const REGION = 'region';
    const AREA = 'area';
    const CITY = 'city';
    const SETTLEMENT = 'settlement';
    const STREET = 'street';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::COUNTRY,
            self::REGION,
            self::AREA,
            self::CITY,
            self::SETTLEMENT,
            self::STREET,
        ];
    }
}