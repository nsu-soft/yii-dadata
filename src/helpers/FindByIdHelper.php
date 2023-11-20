<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\CarBrandDto;
use nsusoft\dadata\dto\suggest\CountryDto;
use nsusoft\dadata\dto\suggest\CurrencyDto;
use nsusoft\dadata\dto\suggest\FnsUnitDto;
use nsusoft\dadata\dto\suggest\FtsUnitDto;
use nsusoft\dadata\dto\suggest\MktuDto;
use nsusoft\dadata\dto\suggest\OkpdDto;
use nsusoft\dadata\dto\suggest\OktmoDto;
use nsusoft\dadata\dto\suggest\OkvedDto;
use nsusoft\dadata\dto\find\party\PartyDto;
use nsusoft\dadata\dto\suggest\PostalUnitDto;
use nsusoft\dadata\dto\suggest\RegionCourtDto;
use nsusoft\dadata\types\enums\FindByIdType;

/**
 * @link https://dadata.ru/api/suggest/
 */
class FindByIdHelper
{
    /**
     * @link https://dadata.ru/api/find-party/
     * @param string $partyId    INN or OGRN as a string
     * @param array $options
     * @return PartyDto
     */
    public static function party(string $partyId, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::PARTY, $partyId, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/postal_unit/
     * @param string $postalUnit
     * @param array $options
     * @return PostalUnitDto
     */
    public static function postalUnit(string $postalUnit, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::POSTAL_UNIT, $postalUnit, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/fns_unit/
     * @param string $fnsUnit
     * @param array $options
     * @return FnsUnitDto
     */
    public static function fnsUnit(string $fnsUnit, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::FNS_UNIT, $fnsUnit, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/fts_unit/
     * @param string $ftsUnit
     * @param array $options
     * @return FtsUnitDto
     */
    public static function ftsUnit(string $ftsUnit, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::FTS_UNIT, $ftsUnit, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/region_court/
     * @param string $regionCourt
     * @param array $options
     * @return RegionCourtDto
     */
    public static function regionCourt(string $regionCourt, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::REGION_COURT, $regionCourt, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/car_brand/
     * @param string $carBrand
     * @param array $options
     * @return CarBrandDto
     */
    public static function carBrand(string $carBrand, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::CAR_BRAND, $carBrand, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/mktu/
     * @param string $mktu
     * @param array $options
     * @return MktuDto
     */
    public static function mktu(string $mktu, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::MKTU, $mktu, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/country/
     * @param string $country
     * @param array $options
     * @return CountryDto
     */
    public static function country(string $country, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::COUNTRY, $country, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/currency/
     * @param string $currency
     * @param array $options
     * @return CurrencyDto
     */
    public static function currency(string $currency, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::CURRENCY, $currency, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/okved2/
     * @param string $okved
     * @param array $options
     * @return OkvedDto
     */
    public static function okved(string $okved, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::OKVED, $okved, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/okpd2/
     * @param string $okpd
     * @param array $options
     * @return OkpdDto
     */
    public static function okpd(string $okpd, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::OKPD, $okpd, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/oktmo/
     * @param string $oktmo
     * @param array $options
     * @return OktmoDto
     */
    public static function oktmo(string $oktmo, array $options = []): ?DtoInterface
    {
        return DadataHelper::findById(FindByIdType::OKTMO, $oktmo, $options);
    }
}