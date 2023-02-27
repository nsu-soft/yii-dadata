<?php

namespace nsusoft\dadata\types\enums;

class VehicleQualityCheck extends BaseEnum
{
    const OK = 0;
    const INCORRECT = 1;
    const TRASH = 2;
    const BRAND_ONLY = 3;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::OK,
            self::INCORRECT,
            self::TRASH,
            self::BRAND_ONLY,
        ];
    }
}