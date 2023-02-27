<?php

namespace nsusoft\dadata\types\enums;

class BankStateStatus extends BaseEnum
{
    const ACTIVE = 'ACTIVE';
    const LIQUIDATING = 'LIQUIDATING';
    const LIQUIDATED = 'LIQUIDATED';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::ACTIVE,
            self::LIQUIDATING,
            self::LIQUIDATED,
        ];
    }
}