<?php

namespace nsusoft\dadata\types\enums;

/**
 * @link https://dadata.ru/api/clean/address/#qc
 */
class AddressQualityCheckCode extends BaseEnum
{
    const QC_CODE_OK = 0;
    const QC_CODE_UNKNOWN = 1;
    const QC_CODE_TRASH = 2;
    const QC_CODE_MULTIPLE = 3;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::QC_CODE_OK,
            self::QC_CODE_UNKNOWN,
            self::QC_CODE_TRASH,
            self::QC_CODE_MULTIPLE,
        ];
    }
}