<?php

namespace nsusoft\dadata\types\db\clean;

use nsusoft\dadata\models\CleanAddressSource;
use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;
use yii\helpers\Json;

/**
 * @property CleanAddressSource $sourceModel
 */
class CleanAddressDb extends CleanDb implements CleanAddressInterface
{
    /**
     * @inheritDoc
     */
    public function getPostalCode(): ?string
    {
        return $this->sourceModel->result->postal_code;
    }

    /**
     * @inheritDoc
     */
    public function getCountry(): ?string
    {
        return $this->sourceModel->result->country;
    }

    /**
     * @inheritDoc
     */
    public function getCountryIsoCode(): ?string
    {
        return $this->sourceModel->result->country_iso_code;
    }

    /**
     * @inheritDoc
     */
    public function getFederalDistrict(): ?string
    {
        return $this->sourceModel->result->federal_district;
    }

    /**
     * @inheritDoc
     */
    public function getRegionFiasId(): ?string
    {
        return $this->sourceModel->result->region_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getRegionKladrId(): ?string
    {
        return $this->sourceModel->result->region_kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getRegionIsoCode(): ?string
    {
        return $this->sourceModel->result->region_iso_code;
    }

    /**
     * @inheritDoc
     */
    public function getRegionWithType(): ?string
    {
        return $this->sourceModel->result->region_with_type;
    }

    /**
     * @inheritDoc
     */
    public function getRegionType(): ?string
    {
        return $this->sourceModel->result->region_type;
    }

    /**
     * @inheritDoc
     */
    public function getRegionTypeFull(): ?string
    {
        return $this->sourceModel->result->region_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getRegion(): ?string
    {
        return $this->sourceModel->result->region;
    }

    /**
     * @inheritDoc
     */
    public function getAreaFiasId(): ?string
    {
        return $this->sourceModel->result->area_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getAreaKladrId(): ?string
    {
        return $this->sourceModel->result->area_kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getAreaWithType(): ?string
    {
        return $this->sourceModel->result->area_with_type;
    }

    /**
     * @inheritDoc
     */
    public function getAreaType(): ?string
    {
        return $this->sourceModel->result->area_type;
    }

    /**
     * @inheritDoc
     */
    public function getAreaTypeFull(): ?string
    {
        return $this->sourceModel->result->area_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getArea(): ?string
    {
        return $this->sourceModel->result->area;
    }

    /**
     * @inheritDoc
     */
    public function getCityFiasId(): ?string
    {
        return $this->sourceModel->result->city_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getCityKladrId(): ?string
    {
        return $this->sourceModel->result->city_kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getCityWithType(): ?string
    {
        return $this->sourceModel->result->city_with_type;
    }

    /**
     * @inheritDoc
     */
    public function getCityType(): ?string
    {
        return $this->sourceModel->result->city_type;
    }

    /**
     * @inheritDoc
     */
    public function getCityTypeFull(): ?string
    {
        return $this->sourceModel->result->city_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getCity(): ?string
    {
        return $this->sourceModel->result->city;
    }

    /**
     * @inheritDoc
     */
    public function getCityArea(): ?string
    {
        return $this->sourceModel->result->city_area;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictFiasId(): ?string
    {
        return $this->sourceModel->result->city_district_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictKladrId(): ?string
    {
        return $this->sourceModel->result->city_district_kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictWithType(): ?string
    {
        return $this->sourceModel->result->city_district_with_type;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictType(): ?string
    {
        return $this->sourceModel->result->city_district_type;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrictTypeFull(): ?string
    {
        return $this->sourceModel->result->city_district_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getCityDistrict(): ?string
    {
        return $this->sourceModel->result->city_district;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementFiasId(): ?string
    {
        return $this->sourceModel->result->settlement_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementKladrId(): ?string
    {
        return $this->sourceModel->result->settlement_kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementWithType(): ?string
    {
        return $this->sourceModel->result->settlement_with_type;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementType(): ?string
    {
        return $this->sourceModel->result->settlement_type;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementTypeFull(): ?string
    {
        return $this->sourceModel->result->settlement_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getSettlement(): ?string
    {
        return $this->sourceModel->result->settlement;
    }

    /**
     * @inheritDoc
     */
    public function getStreetFiasId(): ?string
    {
        return $this->sourceModel->result->street_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getStreetKladrId(): ?string
    {
        return $this->sourceModel->result->street_kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getStreetWithType(): ?string
    {
        return $this->sourceModel->result->street_with_type;
    }

    /**
     * @inheritDoc
     */
    public function getStreetType(): ?string
    {
        return $this->sourceModel->result->street_type;
    }

    /**
     * @inheritDoc
     */
    public function getStreetTypeFull(): ?string
    {
        return $this->sourceModel->result->street_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getStreet(): ?string
    {
        return $this->sourceModel->result->street;
    }

    /**
     * @inheritDoc
     */
    public function getHouseFiasId(): ?string
    {
        return $this->sourceModel->result->house_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getHouseKladrId(): ?string
    {
        return $this->sourceModel->result->house_kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getHouseCadastralNumber(): ?string
    {
        return $this->sourceModel->result->house_cadnum;
    }

    /**
     * @inheritDoc
     */
    public function getHouseType(): ?string
    {
        return $this->sourceModel->result->house_type;
    }

    /**
     * @inheritDoc
     */
    public function getHouseTypeFull(): ?string
    {
        return $this->sourceModel->result->house_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getHouse(): ?string
    {
        return $this->sourceModel->result->house;
    }

    /**
     * @inheritDoc
     */
    public function getBlockType(): ?string
    {
        return $this->sourceModel->result->block_type;
    }

    /**
     * @inheritDoc
     */
    public function getBlockTypeFull(): ?string
    {
        return $this->sourceModel->result->block_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getBlock(): ?string
    {
        return $this->sourceModel->result->block;
    }

    /**
     * @inheritDoc
     */
    public function getEntrance(): ?string
    {
        return $this->sourceModel->result->entrance;
    }

    /**
     * @inheritDoc
     */
    public function getFloor(): ?string
    {
        return $this->sourceModel->result->floor;
    }

    /**
     * @inheritDoc
     */
    public function getFlatFiasId(): ?string
    {
        return $this->sourceModel->result->flat_fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getFlatCadastralNumber(): ?string
    {
        return $this->sourceModel->result->flat_cadnum;
    }

    /**
     * @inheritDoc
     */
    public function getFlatType(): ?string
    {
        return $this->sourceModel->result->flat_type;
    }

    /**
     * @inheritDoc
     */
    public function getFlatTypeFull(): ?string
    {
        return $this->sourceModel->result->flat_type_full;
    }

    /**
     * @inheritDoc
     */
    public function getFlat(): ?string
    {
        return $this->sourceModel->result->flat;
    }

    /**
     * @inheritDoc
     */
    public function getFlatArea(): ?string
    {
        return $this->sourceModel->result->flat_area;
    }

    /**
     * @inheritDoc
     */
    public function getSquareMeterPrice(): ?string
    {
        return $this->sourceModel->result->square_meter_price;
    }

    /**
     * @inheritDoc
     */
    public function getFlatPrice(): ?string
    {
        return $this->sourceModel->result->flat_price;
    }

    /**
     * @inheritDoc
     */
    public function getPostalBox(): ?string
    {
        return $this->sourceModel->result->postal_box;
    }

    /**
     * @inheritDoc
     */
    public function getFiasId(): ?string
    {
        return $this->sourceModel->result->fias_id;
    }

    /**
     * @inheritDoc
     */
    public function getFiasLevel(): ?int
    {
        return $this->sourceModel->result->fias_level;
    }

    /**
     * @inheritDoc
     */
    public function getFiasActualityState(): ?int
    {
        return $this->sourceModel->result->fias_actuality_state;
    }

    /**
     * @inheritDoc
     */
    public function getKladrId(): ?string
    {
        return $this->sourceModel->result->kladr_id;
    }

    /**
     * @inheritDoc
     */
    public function getCapitalMarker(): ?int
    {
        return $this->sourceModel->result->capital_marker;
    }

    /**
     * @inheritDoc
     */
    public function getOkato(): ?string
    {
        return $this->sourceModel->result->okato;
    }

    /**
     * @inheritDoc
     */
    public function getOktmo(): ?string
    {
        return $this->sourceModel->result->oktmo;
    }

    /**
     * @inheritDoc
     */
    public function getTaxOffice(): ?string
    {
        return $this->sourceModel->result->tax_office;
    }

    /**
     * @inheritDoc
     */
    public function getTaxOfficeLegal(): ?string
    {
        return $this->sourceModel->result->tax_office_legal;
    }

    /**
     * @inheritDoc
     */
    public function getTimezone(): ?string
    {
        return $this->sourceModel->result->timezone;
    }

    /**
     * @inheritDoc
     */
    public function getGeographicalLatitude(): ?string
    {
        return $this->sourceModel->result->geo_lat;
    }

    /**
     * @inheritDoc
     */
    public function getGeographicalLongitude(): ?string
    {
        return $this->sourceModel->result->geo_lon;
    }

    /**
     * @inheritDoc
     */
    public function getBeltwayHit(): ?string
    {
        return $this->sourceModel->result->beltway_hit;
    }

    /**
     * @inheritDoc
     */
    public function getBeltwayDistance(): ?string
    {
        return $this->sourceModel->result->beltway_distance;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheck(): ?int
    {
        return $this->sourceModel->qc;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheckGeographical(): ?int
    {
        return $this->sourceModel->result->qc_geo;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheckComplete(): ?int
    {
        return $this->sourceModel->result->qc_complete;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheckHouse(): ?int
    {
        return $this->sourceModel->result->qc_house;
    }

    /**
     * @inheritDoc
     */
    public function getMetro(): array
    {
        return Json::decode($this->sourceModel->result->metro);
    }

    /**
     * @inheritDoc
     */
    public function getUnparsedParts(): ?string
    {
        return $this->sourceModel->unparsed_parts;
    }
}