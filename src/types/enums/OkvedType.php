<?php

namespace nsusoft\dadata\types\enums;

class OkvedType extends BaseEnum
{
    const YEAR_2001 = '2001';
    const YEAR_2014 = '2014';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::YEAR_2001,
            self::YEAR_2014,
        ];
    }
}