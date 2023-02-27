<?php

namespace nsusoft\dadata\types\enums;

class PhoneQualityCheckConflict extends BaseEnum
{
    const OK = 0;
    const CITY = 2;
    const REGION = 3;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::OK,
            self::CITY,
            self::REGION,
        ];
    }
}