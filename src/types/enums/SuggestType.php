<?php

namespace nsusoft\dadata\types\enums;

class SuggestType extends BaseEnum
{
    const ADDRESS = 'address';
    const PARTY = 'party';
    const BANK = 'bank';
    const NAME = 'fio';
    const EMAIL = 'email';
    const FMS_UNIT = 'fms_unit';
    const POSTAL_UNIT = 'postal_unit';
    const FNS_UNIT = 'fns_unit';
    const FTS_UNIT = 'fts_unit';
    const REGION_COURT = 'region_court';
    const METRO = 'metro';
    const CAR_BRAND = 'car_brand';
    const MKTU = 'mktu';
    const COUNTRY = 'country';
    const CURRENCY = 'currency';
    const OKVED = 'okved2';
    const OKPD = 'okpd2';
    const OKTMO = 'oktmo';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::ADDRESS,
            self::PARTY,
            self::BANK,
            self::NAME,
            self::EMAIL,
            self::FMS_UNIT,
            self::POSTAL_UNIT,
            self::FNS_UNIT,
            self::FTS_UNIT,
            self::REGION_COURT,
            self::METRO,
            self::CAR_BRAND,
            self::MKTU,
            self::COUNTRY,
            self::CURRENCY,
            self::OKVED,
            self::OKPD,
            self::OKTMO,
        ];
    }
}