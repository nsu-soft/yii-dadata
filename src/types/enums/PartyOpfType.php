<?php

namespace nsusoft\dadata\types\enums;

class PartyOpfType extends BaseEnum
{
    const YEAR_1999 = '99';
    const YEAR_2012 = '2012';
    const YEAR_2014 = '2014';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::YEAR_1999,
            self::YEAR_2012,
            self::YEAR_2014,
        ];
    }
}