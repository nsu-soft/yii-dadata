<?php

namespace nsusoft\dadata\types\enums;

class CleanType extends BaseEnum
{
    const CLEAN_TYPE_ADDRESS = 'address';
    const CLEAN_TYPE_PHONE = 'phone';
    const CLEAN_TYPE_NAME = 'name';
    const CLEAN_TYPE_EMAIL = 'email';
    const CLEAN_TYPE_PASSPORT = 'passport';
    const CLEAN_TYPE_BIRTHDATE = 'birthdate';
    const CLEAN_TYPE_VEHICLE = 'vehicle';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::CLEAN_TYPE_ADDRESS,
            self::CLEAN_TYPE_PHONE,
            self::CLEAN_TYPE_NAME,
            self::CLEAN_TYPE_EMAIL,
            self::CLEAN_TYPE_PASSPORT,
            self::CLEAN_TYPE_BIRTHDATE,
            self::CLEAN_TYPE_VEHICLE,
        ];
    }
}