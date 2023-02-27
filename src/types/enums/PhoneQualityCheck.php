<?php

namespace nsusoft\dadata\types\enums;

class PhoneQualityCheck extends BaseEnum
{
    const OK = 0;
    const UNKNOWN = 1;
    const TRASH = 2;
    const MULTIPLE = 3;
    const FOREIGN_OK = 7;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::OK,
            self::UNKNOWN,
            self::TRASH,
            self::MULTIPLE,
            self::FOREIGN_OK
        ];
    }
}