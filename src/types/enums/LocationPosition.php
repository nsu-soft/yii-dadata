<?php

namespace nsusoft\dadata\types\enums;

class LocationPosition extends BaseEnum
{
    const LATITUDE = 'lat';
    const LONGITUDE = 'lon';
    const RADIUS = 'radius_meters';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::LATITUDE,
            self::LONGITUDE,
            self::RADIUS,
        ];
    }
}