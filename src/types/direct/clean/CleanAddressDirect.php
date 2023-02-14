<?php

namespace nsusoft\dadata\types\direct\clean;

use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;

class CleanAddressDirect extends CleanDirect implements CleanAddressInterface
{
    /**
     * @inheritDoc
     */
    public function getPostalCode(): ?string
    {
        return $this->rawData['postal_code'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCountry(): ?string
    {
        return $this->rawData['country'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCountryIsoCode(): ?string
    {
        return $this->rawData['country_iso_code'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFederalDistrict(): ?string
    {
        return $this->rawData['federal_district'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionFiasId(): ?string
    {
        return $this->rawData['region_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionKladrId(): ?string
    {
        return $this->rawData['region_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionIsoCode(): ?string
    {
        return $this->rawData['region_iso_code'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionWithType(): ?string
    {
        return $this->rawData['region_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionType(): ?string
    {
        return $this->rawData['region_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionTypeFull(): ?string
    {
        return $this->rawData['region_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegion(): ?string
    {
        return $this->rawData['region'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaFiasId(): ?string
    {
        return $this->rawData['area_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaKladrId(): ?string
    {
        return $this->rawData['area_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaWithType(): ?string
    {
        return $this->rawData['area_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaType(): ?string
    {
        return $this->rawData['area_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaTypeFull(): ?string
    {
        return $this->rawData['area_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getArea(): ?string
    {
        return $this->rawData['area'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityFiasId(): ?string
    {
        return $this->rawData['city_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityKladrId(): ?string
    {
        return $this->rawData['city_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityWithType(): ?string
    {
        return $this->rawData['city_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityType(): ?string
    {
        return $this->rawData['city_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityTypeFull(): ?string
    {
        return $this->rawData['city_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCity(): ?string
    {
        return $this->rawData['city'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityArea(): ?string
    {
        return $this->rawData['city_area'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictFiasId(): ?string
    {
        return $this->rawData['city_district_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictKladrId(): ?string
    {
        return $this->rawData['city_district_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictWithType(): ?string
    {
        return $this->rawData['city_district_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictType(): ?string
    {
        return $this->rawData['city_district_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictTypeFull(): ?string
    {
        return $this->rawData['city_district_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrict(): ?string
    {
        return $this->rawData['city_district'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementFiasId(): ?string
    {
        return $this->rawData['settlement_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementKladrId(): ?string
    {
        return $this->rawData['settlement_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementWithType(): ?string
    {
        return $this->rawData['settlement_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementType(): ?string
    {
        return $this->rawData['settlement_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementTypeFull(): ?string
    {
        return $this->rawData['settlement_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlement(): ?string
    {
        return $this->rawData['settlement'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetFiasId(): ?string
    {
        return $this->rawData['street_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetKladrId(): ?string
    {
        return $this->rawData['street_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetWithType(): ?string
    {
        return $this->rawData['street_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetType(): ?string
    {
        return $this->rawData['street_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetTypeFull(): ?string
    {
        return $this->rawData['street_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreet(): ?string
    {
        return $this->rawData['street'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseFiasId(): ?string
    {
        return $this->rawData['house_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseKladrId(): ?string
    {
        return $this->rawData['house_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseCadastralNumber(): ?string
    {
        return $this->rawData['house_cadnum'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseType(): ?string
    {
        return $this->rawData['house_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseTypeFull(): ?string
    {
        return $this->rawData['house_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouse(): ?string
    {
        return $this->rawData['house'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBlockType(): ?string
    {
        return $this->rawData['block_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBlockTypeFull(): ?string
    {
        return $this->rawData['block_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBlock(): ?string
    {
        return $this->rawData['block'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getEntrance(): ?string
    {
        return $this->rawData['entrance'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFloor(): ?string
    {
        return $this->rawData['floor'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatFiasId(): ?string
    {
        return $this->rawData['flat_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatCadastralNumber(): ?string
    {
        return $this->rawData['flat_cadnum'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatType(): ?string
    {
        return $this->rawData['flat_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatTypeFull(): ?string
    {
        return $this->rawData['flat_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlat(): ?string
    {
        return $this->rawData['flat'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatArea(): ?string
    {
        return $this->rawData['flat_area'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSquareMeterPrice(): ?string
    {
        return $this->rawData['square_meter_price'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatPrice(): ?string
    {
        return $this->rawData['flat_price'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getPostalBox(): ?string
    {
        return $this->rawData['postal_box'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFiasId(): ?string
    {
        return $this->rawData['fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFiasLevel(): ?int
    {
        return $this->rawData['fias_level'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFiasActualityState(): ?int
    {
        return $this->rawData['fias_actuality_state'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getKladrId(): ?string
    {
        return $this->rawData['kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCapitalMarker(): ?int
    {
        return $this->rawData['capital_marker'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getOkato(): ?string
    {
        return $this->rawData['okato'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getOktmo(): ?string
    {
        return $this->rawData['oktmo'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getTaxOffice(): ?string
    {
        return $this->rawData['tax_office'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getTaxOfficeLegal(): ?string
    {
        return $this->rawData['tax_office_legal'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getTimezone(): ?string
    {
        return $this->rawData['timezone'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getGeographicalLatitude(): ?string
    {
        return $this->rawData['geo_lat'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getGeographicalLongitude(): ?string
    {
        return $this->rawData['geo_lon'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBeltwayHit(): ?string
    {
        return $this->rawData['beltway_hit'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBeltwayDistance(): ?string
    {
        return $this->rawData['beltway_distance'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheck(): ?int
    {
        return $this->rawData['qc'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheckGeographical(): ?int
    {
        return $this->rawData['qc_geo'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheckComplete(): ?int
    {
        return $this->rawData['qc_complete'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheckHouse(): ?int
    {
        return $this->rawData['qc_house'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getMetro(): array
    {
        return $this->rawData['metro'] ?? [];
    }

    /**
     * @inheritDoc
     */
    public function getUnparsedParts(): ?string
    {
        return $this->rawData['unparsed_parts'] ?? null;
    }
}