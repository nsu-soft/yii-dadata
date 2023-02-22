<?php

namespace nsusoft\dadata\types\enums;

class PassportQualityCheck extends BaseEnum
{
    const OK = 0;
    const INCORRECT = 1;
    const TRASH = 2;
    const INVALID = 10;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::OK,
            self::INCORRECT,
            self::TRASH,
            self::INVALID,
        ];
    }
}