<?php

namespace nsusoft\dadata\types\enums;

class QualityCheckGeographicalCode extends BaseEnum
{
    const EXACT = 0;
    const NEAREST_HOUSE = 1;
    const STREET = 2;
    const SETTLEMENT = 3;
    const CITY = 4;
    const NOT_DEFINED = 5;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::EXACT,
            self::NEAREST_HOUSE,
            self::STREET,
            self::SETTLEMENT,
            self::CITY,
            self::NOT_DEFINED,
        ];
    }
}