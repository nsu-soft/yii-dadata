<?php

namespace nsusoft\dadata\types\enums;

class PartyStateStatus extends BaseEnum
{
    const ACTIVE = 'ACTIVE';
    const LIQUIDATING = 'LIQUIDATING';
    const LIQUIDATED = 'LIQUIDATED';
    const BANKRUPT = 'BANKRUPT';
    const REORGANIZING = 'REORGANIZING';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::ACTIVE,
            self::LIQUIDATING,
            self::LIQUIDATED,
            self::BANKRUPT,
            self::REORGANIZING,
        ];
    }
}