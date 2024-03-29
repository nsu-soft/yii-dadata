<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\dto\suggest\AddressDto;
use nsusoft\dadata\dto\suggest\bank\BankDto;
use nsusoft\dadata\dto\suggest\CarBrandDto;
use nsusoft\dadata\dto\suggest\CountryDto;
use nsusoft\dadata\dto\suggest\CurrencyDto;
use nsusoft\dadata\dto\suggest\EmailDto;
use nsusoft\dadata\dto\suggest\FmsUnitDto;
use nsusoft\dadata\dto\suggest\FnsUnitDto;
use nsusoft\dadata\dto\suggest\FtsUnitDto;
use nsusoft\dadata\dto\suggest\MetroStationDto;
use nsusoft\dadata\dto\suggest\MktuDto;
use nsusoft\dadata\dto\suggest\NameDto;
use nsusoft\dadata\dto\suggest\OkpdDto;
use nsusoft\dadata\dto\suggest\OktmoDto;
use nsusoft\dadata\dto\suggest\OkvedDto;
use nsusoft\dadata\dto\suggest\party\PartyDto;
use nsusoft\dadata\dto\suggest\PostalUnitDto;
use nsusoft\dadata\dto\suggest\RegionCourtDto;
use nsusoft\dadata\types\enums\FindByIdType;
use nsusoft\dadata\types\enums\SuggestType;

/**
 * @link https://dadata.ru/api/suggest/
 */
class SuggestHelper
{
    /**
     * @link https://dadata.ru/api/suggest/address/
     * @param string $address
     * @param array $options
     * @return AddressDto[]
     */
    public static function address(string $address, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::ADDRESS, $address, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/party/
     * @param string $party
     * @param array $options
     * @return PartyDto[]
     */
    public static function party(string $party, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::PARTY, $party, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/bank/
     * @param string $bank
     * @param array $options
     * @return BankDto[]
     */
    public static function bank(string $bank, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::BANK, $bank, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/name/
     * @param string $name
     * @param array $options
     * @return NameDto[]
     */
    public static function name(string $name, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::NAME, $name, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/email/
     * @param string $email
     * @param array $options
     * @return EmailDto[]
     */
    public static function email(string $email, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::EMAIL, $email, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/fms_unit/
     * @param string $fmsUnit
     * @param array $options
     * @return FmsUnitDto[]
     */
    public static function fmsUnit(string $fmsUnit, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::FMS_UNIT, $fmsUnit, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/postal_unit/
     * @param string $postalUnit
     * @param array $options
     * @return PostalUnitDto[]
     */
    public static function postalUnit(string $postalUnit, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::POSTAL_UNIT, $postalUnit, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/fns_unit/
     * @param string $fnsUnit
     * @param array $options
     * @return FnsUnitDto[]
     */
    public static function fnsUnit(string $fnsUnit, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::FNS_UNIT, $fnsUnit, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/fts_unit/
     * @param string $ftsUnit
     * @param array $options
     * @return FtsUnitDto[]
     */
    public static function ftsUnit(string $ftsUnit, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::FTS_UNIT, $ftsUnit, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/region_court/
     * @param string $regionCourt
     * @param array $options
     * @return RegionCourtDto[]
     */
    public static function regionCourt(string $regionCourt, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::REGION_COURT, $regionCourt, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/metro/
     * @param string $metro
     * @param array $options
     * @return MetroStationDto[]
     */
    public static function metro(string $metro, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::METRO, $metro, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/car_brand/
     * @param string $carBrand
     * @param array $options
     * @return CarBrandDto[]
     */
    public static function carBrand(string $carBrand, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::CAR_BRAND, $carBrand, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/mktu/
     * @param string $mktu
     * @param array $options
     * @return MktuDto[]
     */
    public static function mktu(string $mktu, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::MKTU, $mktu, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/country/
     * @param string $country
     * @param array $options
     * @return CountryDto[]
     */
    public static function country(string $country, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::COUNTRY, $country, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/currency/
     * @param string $currency
     * @param array $options
     * @return CurrencyDto[]
     */
    public static function currency(string $currency, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::CURRENCY, $currency, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/okved2/
     * @param string $okved
     * @param array $options
     * @return OkvedDto[]
     */
    public static function okved(string $okved, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::OKVED, $okved, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/okpd2/
     * @param string $okpd
     * @param array $options
     * @return OkpdDto[]
     */
    public static function okpd(string $okpd, array $options = []): array
    {
        return DadataHelper::suggest(SuggestType::OKPD, $okpd, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/oktmo/
     * @param string $oktmo
     * @param array $options
     * @return OktmoDto[]
     */
    public static function oktmo(string $oktmo, array $options = []): array
    {
        return [DadataHelper::findById(FindByIdType::OKTMO, $oktmo, $options)];
    }
}