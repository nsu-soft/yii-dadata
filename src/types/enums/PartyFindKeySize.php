<?php

namespace nsusoft\dadata\types\enums;

class PartyFindKeySize extends BaseEnum
{
    const INN_LEGAL = 10;
    const INN_INDIVIDUAL = 12;
    const OGRN_LEGAL = 13;
    const OGRN_INDIVIDUAL = 15;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::INN_LEGAL,
            self::INN_INDIVIDUAL,
            self::OGRN_LEGAL,
            self::OGRN_INDIVIDUAL,
        ];
    }
}