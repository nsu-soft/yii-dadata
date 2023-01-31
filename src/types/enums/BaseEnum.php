<?php

namespace nsusoft\dadata\types\enums;

abstract class BaseEnum implements EnumInterface
{
    /**
     * @inheritDoc
     */
    public static function exists($value): bool
    {
        return in_array($value, static::all());
    }
}