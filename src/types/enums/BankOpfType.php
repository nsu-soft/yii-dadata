<?php

namespace nsusoft\dadata\types\enums;

class BankOpfType extends BaseEnum
{
    const BANK = 'BANK';
    const BANK_BRANCH = 'BANK_BRANCH';
    const NKO = 'NKO';
    const NKO_BRANCH = 'NKO_BRANCH';
    const RKC = 'RKC';
    const CBR = 'CBR';
    const TREASURY = 'TREASURY';
    const OTHER = 'OTHER';

    /**
     * @inheritDoc
     */
    public static function all(): array
    {
        return [
            self::BANK,
            self::BANK_BRANCH,
            self::NKO,
            self::NKO_BRANCH,
            self::RKC,
            self::CBR,
            self::TREASURY,
            self::OTHER,
        ];
    }
}