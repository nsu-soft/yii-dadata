<?php

namespace nsusoft\dadata\types\enums;

class PartyType extends BaseEnum
{
    const LEGAL = 'LEGAL';
    const INDIVIDUAL = 'INDIVIDUAL';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::LEGAL,
            self::INDIVIDUAL,
        ];
    }
}