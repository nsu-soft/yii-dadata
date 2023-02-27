<?php

namespace nsusoft\dadata\types\enums;

class PhoneType extends BaseEnum
{
    const MOBILE = 'Мобильный';
    const LANDLINE = 'Стационарный';
    const DIRECT_MOBILE = 'Прямой мобильный';
    const CALL_CENTER = 'Колл-центр';
    const UNKNOWN = 'Неизвестный';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::MOBILE,
            self::LANDLINE,
            self::DIRECT_MOBILE,
            self::CALL_CENTER,
            self::UNKNOWN,
        ];
    }
}