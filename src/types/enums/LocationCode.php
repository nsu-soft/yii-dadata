<?php

namespace nsusoft\dadata\types\enums;

class LocationCode extends BaseEnum
{
    const ISO_COUNTRY = 'country_iso_code';
    const ISO_REGION = 'region_iso_code';
    const KLADR = 'kladr_id';
    const FIAS = 'fias_id';
    const FIAS_REGION = 'region_fias_id';
    const FIAS_AREA = 'area_fias_id';
    const FIAS_CITY = 'city_fias_id';
    const FIAS_SETTLEMENT = 'settlement_fias_id';
    const FIAS_STREET = 'street_fias_id';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::ISO_COUNTRY,
            self::ISO_REGION,
            self::KLADR,
            self::FIAS,
            self::FIAS_REGION,
            self::FIAS_AREA,
            self::FIAS_CITY,
            self::FIAS_SETTLEMENT,
            self::FIAS_STREET,
        ];
    }
}