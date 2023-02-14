<?php

namespace nsusoft\dadata\types\enums;

class DivisionType extends BaseEnum
{
    const ADMINISTRATIVE = 'administrative';
    const MUNICIPAL = 'municipal';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::ADMINISTRATIVE,
            self::MUNICIPAL,
        ];
    }
}