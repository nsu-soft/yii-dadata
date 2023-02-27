<?php

namespace nsusoft\dadata\types\enums;

class NameGender extends BaseEnum
{
    const MALE = 'М';
    const FEMALE = 'Ж';
    const UNKNOWN = 'НД';

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