<?php

namespace nsusoft\dadata\adapters\dto\db\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\address\AddressDto;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\models\CleanAddressSource;
use yii\helpers\Json;

/**
 * @property CleanAddressSource $source
 */
class CleanAddressAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): AddressDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source->source;
        $dto->result = $this->source->result->result;
        $dto->postalCode = $this->source->result->postal_code;
        $dto->country = $this->source->result->country;
        $dto->countryIsoCode = $this->source->result->country_iso_code;
        $dto->federalDistrict = $this->source->result->federal_district;
        $dto->regionFiasId = $this->source->result->region_fias_id;
        $dto->regionKladrId = $this->source->result->region_kladr_id;
        $dto->regionIsoCode = $this->source->result->region_iso_code;
        $dto->regionWithType = $this->source->result->region_with_type;
        $dto->regionType = $this->source->result->region_type;
        $dto->regionTypeFull = $this->source->result->region_type_full;
        $dto->region = $this->source->result->region;
        $dto->areaFiasId = $this->source->result->area_fias_id;
        $dto->areaKladrId = $this->source->result->area_kladr_id;
        $dto->areaWithType = $this->source->result->area_with_type;
        $dto->areaType = $this->source->result->area_type;
        $dto->areaTypeFull = $this->source->result->area_type_full;
        $dto->area = $this->source->result->area;
        $dto->cityFiasId = $this->source->result->city_fias_id;
        $dto->cityKladrId = $this->source->result->city_kladr_id;
        $dto->cityWithType = $this->source->result->city_with_type;
        $dto->cityType = $this->source->result->city_type;
        $dto->cityTypeFull = $this->source->result->city_type_full;
        $dto->city = $this->source->result->city;
        $dto->cityArea = $this->source->result->city_area;
        $dto->cityDistrictFiasId = $this->source->result->city_district_fias_id;
        $dto->cityDistrictKladrId = $this->source->result->city_district_kladr_id;
        $dto->cityDistrictWithType = $this->source->result->city_district_with_type;
        $dto->cityDistrictType = $this->source->result->city_district_type;
        $dto->cityDistrictTypeFull = $this->source->result->city_district_type_full;
        $dto->cityDistrict = $this->source->result->city_district;
        $dto->settlementFiasId = $this->source->result->settlement_fias_id;
        $dto->settlementKladrId = $this->source->result->settlement_kladr_id;
        $dto->settlementWithType = $this->source->result->settlement_with_type;
        $dto->settlementType = $this->source->result->settlement_type;
        $dto->settlementTypeFull = $this->source->result->settlement_type_full;
        $dto->settlement = $this->source->result->settlement;
        $dto->streetFiasId = $this->source->result->street_fias_id;
        $dto->streetKladrId = $this->source->result->street_kladr_id;
        $dto->streetWithType = $this->source->result->street_with_type;
        $dto->streetType = $this->source->result->street_type;
        $dto->streetTypeFull = $this->source->result->street_type_full;
        $dto->street = $this->source->result->street;
        $dto->houseFiasId = $this->source->result->house_fias_id;
        $dto->houseKladrId = $this->source->result->house_kladr_id;
        $dto->houseCadastralNumber = $this->source->result->house_cadnum;
        $dto->houseType = $this->source->result->house_type;
        $dto->houseTypeFull = $this->source->result->house_type_full;
        $dto->house = $this->source->result->house;
        $dto->blockType = $this->source->result->block_type;
        $dto->blockTypeFull = $this->source->result->block_type_full;
        $dto->block = $this->source->result->block;
        $dto->entrance = $this->source->result->entrance;
        $dto->floor = $this->source->result->floor;
        $dto->flatFiasId = $this->source->result->flat_fias_id;
        $dto->flatCadastralNumber = $this->source->result->flat_cadnum;
        $dto->flatType = $this->source->result->flat_type;
        $dto->flatTypeFull = $this->source->result->flat_type_full;
        $dto->flat = $this->source->result->flat;
        $dto->flatArea = $this->source->result->flat_area;
        $dto->squareMeterPrice = $this->source->result->square_meter_price;
        $dto->flatPrice = $this->source->result->flat_price;
        $dto->postalBox = $this->source->result->postal_box;
        $dto->fiasId = $this->source->result->fias_id;
        $dto->fiasLevel = $this->source->result->fias_level;
        $dto->fiasActualityState = $this->source->result->fias_actuality_state;
        $dto->kladrId = $this->source->result->kladr_id;
        $dto->capitalMarker = $this->source->result->capital_marker;
        $dto->okato = $this->source->result->okato;
        $dto->oktmo = $this->source->result->oktmo;
        $dto->taxOffice = $this->source->result->tax_office;
        $dto->taxOfficeLegal = $this->source->result->tax_office_legal;
        $dto->timezone = $this->source->result->timezone;
        $dto->latitude = $this->source->result->geo_lat;
        $dto->longitude = $this->source->result->geo_lon;
        $dto->beltwayHit = $this->source->result->beltway_hit;
        $dto->beltwayDistance = $this->source->result->beltway_distance;
        $dto->qualityCheckGeographical = $this->source->result->qc_geo;
        $dto->qualityCheckComplete = $this->source->result->qc_complete;
        $dto->qualityCheckHouse = $this->source->result->qc_house;
        $dto->qualityCheck = $this->source->qc;
        $dto->unparsedParts = $this->source->unparsed_parts;

        $metroAdapter = new CleanMetroStationsAdapter(['source' => Json::decode($this->source->result->metro)]);
        $dto->metro = $metroAdapter->populate();

        return $dto;
    }

    /**
     * @inheritDoc
     * @return AddressDto
     */
    protected function createDto(): DtoInterface
    {
        return new AddressDto();
    }
}