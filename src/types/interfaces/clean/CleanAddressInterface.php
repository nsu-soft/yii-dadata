<?php

namespace nsusoft\dadata\types\interfaces\clean;

use nsusoft\dadata\types\direct\clean\CleanAddressDirect;

/**
 * @link https://dadata.ru/api/clean/address/ Documentation page.
 * @see CleanAddressDirect
 * @property string|null $postalCode
 * @property string|null $country
 * @property string|null $countryIsoCode
 * @property string|null $federalDistrict
 * @property string|null $regionFiasId
 * @property string|null $regionKladrId
 * @property string|null $regionIsoCode
 * @property string|null $regionWithType
 * @property string|null $regionType
 * @property string|null $regionTypeFull
 * @property string|null $region
 * @property string|null $areaFiasId
 * @property string|null $areaKladrId
 * @property string|null $areaWithType
 * @property string|null $areaType
 * @property string|null $areaTypeFull
 * @property string|null $area
 * @property string|null $cityFiasId
 * @property string|null $cityKladrId
 * @property string|null $cityWithType
 * @property string|null $cityType
 * @property string|null $cityTypeFull
 * @property string|null $city
 * @property string|null $cityArea
 * @property string|null $cityDistrictFiasId
 * @property string|null $cityDistrictKladrId
 * @property string|null $cityDistrictWithType
 * @property string|null $cityDistrictType
 * @property string|null $cityDistrictTypeFull
 * @property string|null $cityDistrict
 * @property string|null $settlementFiasId
 * @property string|null $settlementKladrId
 * @property string|null $settlementWithType
 * @property string|null $settlementType
 * @property string|null $settlementTypeFull
 * @property string|null $settlement
 * @property string|null $streetFiasId
 * @property string|null $streetKladrId
 * @property string|null $streetWithType
 * @property string|null $streetType
 * @property string|null $streetTypeFull
 * @property string|null $street
 * @property string|null $houseFiasId
 * @property string|null $houseKladrId
 * @property string|null $houseCadastralNumber
 * @property string|null $houseType
 * @property string|null $houseTypeFull
 * @property string|null $house
 * @property string|null $blockType
 * @property string|null $blockTypeFull
 * @property string|null $block
 * @property string|null $entrance
 * @property string|null $floor
 * @property string|null $flatFiasId
 * @property string|null $flatCadastralNumber
 * @property string|null $flatType
 * @property string|null $flatTypeFull
 * @property string|null $flat
 * @property string|null $flatArea
 * @property string|null $squareMeterPrice
 * @property string|null $flatPrice
 * @property string|null $postalBox
 * @property string|null $fiasId
 * @property int|null $fiasLevel
 * @property int|null $fiasActualityState
 * @property string|null $kladrId
 * @property int|null $capitalMarker
 * @property string|null $okato
 * @property string|null $oktmo
 * @property string|null $taxOffice
 * @property string|null $taxOfficeLegal
 * @property string|null $timezone
 * @property string|null $geographicalLatitude
 * @property string|null $geographicalLongitude
 * @property string|null $beltwayHit
 * @property string|null $beltwayDistance
 * @property int|null $qualityCheck
 * @property int|null $qualityCheckGeographical
 * @property int|null $qualityCheckComplete
 * @property int|null $qualityCheckHouse
 * @property array $metro
 * @property string|null $unparsedParts
 */
interface CleanAddressInterface extends CleanInterface
{
    /**
     * Quality check
     * @link https://dadata.ru/api/clean/address/#qc
     */
    const QC_CODE_OK = 0;
    const QC_CODE_UNKNOWN = 1;
    const QC_CODE_TRASH = 2;
    const QC_CODE_MULTIPLE = 3;

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string;

    /**
     * @return string|null
     */
    public function getCountry(): ?string;

    /**
     * @return string|null
     */
    public function getCountryIsoCode(): ?string;

    /**
     * @return string|null
     */
    public function getFederalDistrict(): ?string;

    /**
     * @return string|null
     */
    public function getRegionFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getRegionKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getRegionIsoCode(): ?string;

    /**
     * @return string|null
     */
    public function getRegionWithType(): ?string;

    /**
     * @return string|null
     */
    public function getRegionType(): ?string;

    /**
     * @return string|null
     */
    public function getRegionTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getRegion(): ?string;

    /**
     * @return string|null
     */
    public function getAreaFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getAreaKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getAreaWithType(): ?string;

    /**
     * @return string|null
     */
    public function getAreaType(): ?string;

    /**
     * @return string|null
     */
    public function getAreaTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getArea(): ?string;

    /**
     * @return string|null
     */
    public function getCityFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getCityKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getCityWithType(): ?string;

    /**
     * @return string|null
     */
    public function getCityType(): ?string;

    /**
     * @return string|null
     */
    public function getCityTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getCity(): ?string;

    /**
     * @return string|null
     */
    public function getCityArea(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictWithType(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictType(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrict(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementWithType(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementType(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getSettlement(): ?string;

    /**
     * @return string|null
     */
    public function getStreetFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getStreetKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getStreetWithType(): ?string;

    /**
     * @return string|null
     */
    public function getStreetType(): ?string;

    /**
     * @return string|null
     */
    public function getStreetTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getStreet(): ?string;

    /**
     * @return string|null
     */
    public function getHouseFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getHouseKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getHouseCadastralNumber(): ?string;

    /**
     * @return string|null
     */
    public function getHouseType(): ?string;

    /**
     * @return string|null
     */
    public function getHouseTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getHouse(): ?string;

    /**
     * @return string|null
     */
    public function getBlockType(): ?string;

    /**
     * @return string|null
     */
    public function getBlockTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getBlock(): ?string;

    /**
     * @return string|null
     */
    public function getEntrance(): ?string;

    /**
     * @return string|null
     */
    public function getFloor(): ?string;

    /**
     * @return string|null
     */
    public function getFlatFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getFlatCadastralNumber(): ?string;

    /**
     * @return string|null
     */
    public function getFlatType(): ?string;

    /**
     * @return string|null
     */
    public function getFlatTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getFlat(): ?string;

    /**
     * @return string|null
     */
    public function getFlatArea(): ?string;

    /**
     * @return string|null
     */
    public function getSquareMeterPrice(): ?string;

    /**
     * @return string|null
     */
    public function getFlatPrice(): ?string;

    /**
     * @return string|null
     */
    public function getPostalBox(): ?string;

    /**
     * @return string|null
     */
    public function getFiasId(): ?string;

    /**
     * @return int|null
     */
    public function getFiasLevel(): ?int;

    /**
     * @return int|null
     */
    public function getFiasActualityState(): ?int;

    /**
     * @return string|null
     */
    public function getKladrId(): ?string;

    /**
     * @return int|null
     */
    public function getCapitalMarker(): ?int;

    /**
     * @return string|null
     */
    public function getOkato(): ?string;

    /**
     * @return string|null
     */
    public function getOktmo(): ?string;

    /**
     * @return string|null
     */
    public function getTaxOffice(): ?string;

    /**
     * @return string|null
     */
    public function getTaxOfficeLegal(): ?string;

    /**
     * @return string|null
     */
    public function getTimezone(): ?string;

    /**
     * @return string|null
     */
    public function getGeographicalLatitude(): ?string;

    /**
     * @return string|null
     */
    public function getGeographicalLongitude(): ?string;

    /**
     * @return string|null
     */
    public function getBeltwayHit(): ?string;

    /**
     * @return string|null
     */
    public function getBeltwayDistance(): ?string;

    /**
     * @return int|null
     */
    public function getQualityCheck(): ?int;

    /**
     * @return int|null
     */
    public function getQualityCheckGeographical(): ?int;

    /**
     * @return int|null
     */
    public function getQualityCheckComplete(): ?int;

    /**
     * @return int|null
     */
    public function getQualityCheckHouse(): ?int;

    /**
     * @return array
     */
    public function getMetro(): array;

    /**
     * @return string|null
     */
    public function getUnparsedParts(): ?string;
}