<?php

namespace nsusoft\dadata\types\enums;

/**
 * @link https://dadata.ru/api/clean/address/#qc
 */
class AddressQualityCheck extends BaseEnum
{
    const OK = 0;
    const UNKNOWN = 1;
    const TRASH = 2;
    const MULTIPLE = 3;

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
        ];
    }
}