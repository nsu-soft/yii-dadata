<?php

namespace nsusoft\dadata\types\enums;

interface EnumInterface
{
    /**
     * @return array
     */
    public static function all(): array;

    /**
     * @param mixed $value
     * @return bool
     */
    public static function exists($value): bool;
}