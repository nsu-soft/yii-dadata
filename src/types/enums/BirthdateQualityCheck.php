<?php

namespace nsusoft\dadata\types\enums;

class BirthdateQualityCheck extends BaseEnum
{
    const OK = 0;
    const INCORRECT = 1;
    const TRASH = 2;

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::OK,
            self::INCORRECT,
            self::TRASH,
        ];
    }
}