<?php

namespace nsusoft\dadata\types\enums;

class SuggestType extends BaseEnum
{
    const SUGGEST_TYPE_ADDRESS = 'address';
    const SUGGEST_TYPE_PARTY = 'party';
    const SUGGEST_TYPE_BANK = 'bank';
    const SUGGEST_TYPE_NAME = 'fio';
    const SUGGEST_TYPE_EMAIL = 'email';
    const SUGGEST_TYPE_FMS_UNIT = 'fms_unit';
    const SUGGEST_TYPE_POSTAL_UNIT = 'postal_unit';
    const SUGGEST_TYPE_FNS_UNIT = 'fns_unit';
    const SUGGEST_TYPE_FTS_UNIT = 'fts_unit';
    const SUGGEST_TYPE_REGION_COURT = 'region_court';
    const SUGGEST_TYPE_METRO = 'metro';
    const SUGGEST_TYPE_CAR_BRAND = 'car_brand';
    const SUGGEST_TYPE_MKTU = 'mktu';
    const SUGGEST_TYPE_COUNTRY = 'country';
    const SUGGEST_TYPE_CURRENCY = 'currency';
    const SUGGEST_TYPE_OKVED = 'okved2';
    const SUGGEST_TYPE_OKPD = 'okpd2';
    const SUGGEST_TYPE_OKTMO = 'oktmo';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::SUGGEST_TYPE_ADDRESS,
            self::SUGGEST_TYPE_PARTY,
            self::SUGGEST_TYPE_BANK,
            self::SUGGEST_TYPE_NAME,
            self::SUGGEST_TYPE_EMAIL,
            self::SUGGEST_TYPE_FMS_UNIT,
            self::SUGGEST_TYPE_POSTAL_UNIT,
            self::SUGGEST_TYPE_FNS_UNIT,
            self::SUGGEST_TYPE_FTS_UNIT,
            self::SUGGEST_TYPE_REGION_COURT,
            self::SUGGEST_TYPE_METRO,
            self::SUGGEST_TYPE_CAR_BRAND,
            self::SUGGEST_TYPE_MKTU,
            self::SUGGEST_TYPE_COUNTRY,
            self::SUGGEST_TYPE_CURRENCY,
            self::SUGGEST_TYPE_OKVED,
            self::SUGGEST_TYPE_OKPD,
            self::SUGGEST_TYPE_OKTMO,
        ];
    }
}