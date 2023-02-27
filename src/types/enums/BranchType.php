<?php

namespace nsusoft\dadata\types\enums;

class BranchType extends BaseEnum
{
    const MAIN = 'MAIN';
    const BRANCH = 'BRANCH';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::MAIN,
            self::BRANCH,
        ];
    }
}