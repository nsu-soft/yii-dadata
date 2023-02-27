<?php

namespace nsusoft\dadata\types\enums;

class Gender extends BaseEnum
{
    const MALE = 'MALE';
    const FEMALE = 'FEMALE';
    const UNKNOWN = 'UNKNOWN';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::MALE,
            self::FEMALE,
            self::UNKNOWN,
        ];
    }
}