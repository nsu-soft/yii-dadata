<?php

namespace nsusoft\dadata\types\enums;

class NameQualityCheck extends BaseEnum
{
    const OK = 0;
    const UNKNOWN = 1;
    const TRASH = 2;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::OK,
            self::UNKNOWN,
            self::TRASH,
        ];
    }
}