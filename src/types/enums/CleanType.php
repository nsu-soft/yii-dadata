<?php

namespace nsusoft\dadata\types\enums;

class CleanType extends BaseEnum
{
    const ADDRESS = 'address';
    const PHONE = 'phone';
    const NAME = 'name';
    const EMAIL = 'email';
    const PASSPORT = 'passport';
    const BIRTHDATE = 'birthdate';
    const VEHICLE = 'vehicle';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::ADDRESS,
            self::PHONE,
            self::NAME,
            self::EMAIL,
            self::PASSPORT,
            self::BIRTHDATE,
            self::VEHICLE,
        ];
    }
}