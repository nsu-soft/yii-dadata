<?php

namespace nsusoft\dadata\types\enums;

class EmailQualityCheck extends BaseEnum
{
    const OK = 0;
    const INCORRECT = 1;
    const TRASH = 2;
    const ONE_TIME = 3;
    const MISPRINT = 4;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::OK,
            self::INCORRECT,
            self::TRASH,
            self::ONE_TIME,
            self::MISPRINT,
        ];
    }
}