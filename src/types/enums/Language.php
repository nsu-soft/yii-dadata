<?php

namespace nsusoft\dadata\types\enums;

class Language extends BaseEnum
{
    const RUSSIAN = 'ru';
    const ENGLISH = 'en';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::RUSSIAN,
            self::ENGLISH,
        ];
    }
}