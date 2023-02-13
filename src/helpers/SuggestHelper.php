<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\types\enums\SuggestType;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;

class SuggestHelper
{
    /**
     * @param string $address
     * @param array $options
     * @return SuggestInterface
     */
    public static function address(string $address, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_ADDRESS, $address, $options);
    }

    /**
     * @param string $party
     * @param array $options
     * @return SuggestInterface
     */
    public static function party(string $party, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_PARTY, $party, $options);
    }

    /**
     * @param string $bank
     * @param array $options
     * @return SuggestInterface
     */
    public static function bank(string $bank, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_BANK, $bank, $options);
    }

    /**
     * @param string $name
     * @param array $options
     * @return SuggestInterface
     */
    public static function name(string $name, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_NAME, $name, $options);
    }

    /**
     * @param string $email
     * @param array $options
     * @return SuggestInterface
     */
    public static function email(string $email, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_EMAIL, $email, $options);
    }

    /**
     * @param string $fmsUnit
     * @param array $options
     * @return SuggestInterface
     */
    public static function fmsUnit(string $fmsUnit, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_FMS_UNIT, $fmsUnit, $options);
    }

    /**
     * @param string $postalUnit
     * @param array $options
     * @return SuggestInterface
     */
    public static function postalUnit(string $postalUnit, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_POSTAL_UNIT, $postalUnit, $options);
    }

    /**
     * @param string $fnsUnit
     * @param array $options
     * @return SuggestInterface
     */
    public static function fnsUnit(string $fnsUnit, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_FNS_UNIT, $fnsUnit, $options);
    }

    /**
     * @param string $ftsUnit
     * @param array $options
     * @return SuggestInterface
     */
    public static function ftsUnit(string $ftsUnit, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_FTS_UNIT, $ftsUnit, $options);
    }

    /**
     * @param string $regionCourt
     * @param array $options
     * @return SuggestInterface
     */
    public static function regionCourt(string $regionCourt, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_REGION_COURT, $regionCourt, $options);
    }

    /**
     * @param string $metro
     * @param array $options
     * @return SuggestInterface
     */
    public static function metro(string $metro, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_METRO, $metro, $options);
    }

    /**
     * @param string $carBrand
     * @param array $options
     * @return SuggestInterface
     */
    public static function carBrand(string $carBrand, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_CAR_BRAND, $carBrand, $options);
    }

    /**
     * @param string $mktu
     * @param array $options
     * @return SuggestInterface
     */
    public static function mktu(string $mktu, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_MKTU, $mktu, $options);
    }

    /**
     * @param string $country
     * @param array $options
     * @return SuggestInterface
     */
    public static function country(string $country, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_COUNTRY, $country, $options);
    }

    /**
     * @param string $currency
     * @param array $options
     * @return SuggestInterface
     */
    public static function currency(string $currency, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_CURRENCY, $currency, $options);
    }

    /**
     * @param string $okved
     * @param array $options
     * @return SuggestInterface
     */
    public static function okved(string $okved, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_OKVED, $okved, $options);
    }

    /**
     * @param string $okpd
     * @param array $options
     * @return SuggestInterface
     */
    public static function okpd(string $okpd, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_OKPD, $okpd, $options);
    }

    /**
     * @param string $oktmo
     * @param array $options
     * @return SuggestInterface
     */
    public static function oktmo(string $oktmo, array $options = []): SuggestInterface
    {
        return DadataHelper::suggest(SuggestType::SUGGEST_TYPE_OKTMO, $oktmo, $options);
    }
}