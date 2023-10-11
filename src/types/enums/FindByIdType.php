<?php

namespace nsusoft\dadata\types\enums;

class FindByIdType extends BaseEnum
{
    const PARTY = SuggestType::PARTY;
    const POSTAL_UNIT = SuggestType::POSTAL_UNIT;
    const FNS_UNIT = SuggestType::FNS_UNIT;
    const FTS_UNIT = SuggestType::FTS_UNIT;
    const REGION_COURT = SuggestType::REGION_COURT;
    const CAR_BRAND = SuggestType::CAR_BRAND;
    const MKTU = SuggestType::MKTU;
    const COUNTRY = SuggestType::COUNTRY;
    const CURRENCY = SuggestType::CURRENCY;
    const OKVED = SuggestType::OKVED;
    const OKPD = SuggestType::OKPD;
    const OKTMO = SuggestType::OKTMO;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::PARTY,
            self::POSTAL_UNIT,
            self::FNS_UNIT,
            self::FTS_UNIT,
            self::REGION_COURT,
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