<?php

namespace nsusoft\dadata\adapters\dto\direct\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\AddressDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanAddressesAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): AddressDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source['source'];
        $dto->result = $this->source['result'];
        $dto->postalCode = $this->source['postal_code'];
        $dto->country = $this->source['country'];
        $dto->countryIsoCode = $this->source['country_iso_code'];
        $dto->federalDistrict = $this->source['federal_district'];
        $dto->regionFiasId = $this->source['region_fias_id'];
        $dto->regionKladrId = $this->source['region_kladr_id'];
        $dto->regionIsoCode = $this->source['region_iso_code'];
        $dto->regionWithType = $this->source['region_with_type'];
        $dto->regionType = $this->source['region_type'];
        $dto->regionTypeFull = $this->source['region_type_full'];
        $dto->region = $this->source['region'];
        $dto->areaFiasId = $this->source['area_fias_id'];
        $dto->areaKladrId = $this->source['area_kladr_id'];
        $dto->areaWithType = $this->source['area_with_type'];
        $dto->areaType = $this->source['area_type'];
        $dto->areaTypeFull = $this->source['area_type_full'];
        $dto->area = $this->source['area'];
        $dto->cityFiasId = $this->source['city_fias_id'];
        $dto->cityKladrId = $this->source['city_kladr_id'];
        $dto->cityWithType = $this->source['city_with_type'];
        $dto->cityType = $this->source['city_type'];
        $dto->cityTypeFull = $this->source['city_type_full'];
        $dto->city = $this->source['city'];
        $dto->cityArea = $this->source['city_area'];
        $dto->cityDistrictFiasId = $this->source['city_district_fias_id'];
        $dto->cityDistrictKladrId = $this->source['city_district_kladr_id'];
        $dto->cityDistrictWithType = $this->source['city_district_with_type'];
        $dto->cityDistrictType = $this->source['city_district_type'];
        $dto->cityDistrictTypeFull = $this->source['city_district_type_full'];
        $dto->cityDistrict = $this->source['city_district'];
        $dto->settlementFiasId = $this->source['settlement_fias_id'];
        $dto->settlementKladrId = $this->source['settlement_kladr_id'];
        $dto->settlementWithType = $this->source['settlement_with_type'];
        $dto->settlementType = $this->source['settlement_type'];
        $dto->settlementTypeFull = $this->source['settlement_type_full'];
        $dto->settlement = $this->source['settlement'];
        $dto->streetFiasId = $this->source['street_fias_id'];
        $dto->streetKladrId = $this->source['street_kladr_id'];
        $dto->streetWithType = $this->source['street_with_type'];
        $dto->streetType = $this->source['street_type'];
        $dto->streetTypeFull = $this->source['street_type_full'];
        $dto->street = $this->source['street'];
        $dto->houseFiasId = $this->source['house_fias_id'];
        $dto->houseKladrId = $this->source['house_kladr_id'];
        $dto->houseCadastralNumber = $this->source['house_cadnum'];
        $dto->houseType = $this->source['house_type'];
        $dto->houseTypeFull = $this->source['house_type_full'];
        $dto->house = $this->source['house'];
        $dto->blockType = $this->source['block_type'];
        $dto->blockTypeFull = $this->source['block_type_full'];
        $dto->block = $this->source['block'];
        $dto->entrance = $this->source['entrance'];
        $dto->floor = $this->source['floor'];
        $dto->flatFiasId = $this->source['flat_fias_id'];
        $dto->flatCadastralNumber = $this->source['flat_cadnum'];
        $dto->flatType = $this->source['flat_type'];
        $dto->flatTypeFull = $this->source['flat_type_full'];
        $dto->flat = $this->source['flat'];
        $dto->flatArea = $this->source['flat_area'];
        $dto->squareMeterPrice = $this->source['square_meter_price'];
        $dto->flatPrice = $this->source['flat_price'];
        $dto->postalBox = $this->source['postal_box'];
        $dto->fiasId = $this->source['fias_id'];
        $dto->fiasLevel = $this->source['fias_level'];
        $dto->fiasActualityState = $this->source['fias_actuality_state'];
        $dto->kladrId = $this->source['kladr_id'];
        $dto->capitalMarker = $this->source['capital_marker'];
        $dto->okato = $this->source['okato'];
        $dto->oktmo = $this->source['oktmo'];
        $dto->taxOffice = $this->source['tax_office'];
        $dto->taxOfficeLegal = $this->source['tax_office_legal'];
        $dto->timezone = $this->source['timezone'];
        $dto->latitude = $this->source['geo_lat'];
        $dto->longitude = $this->source['geo_lon'];
        $dto->beltwayHit = $this->source['beltway_hit'];
        $dto->beltwayDistance = $this->source['beltway_distance'];
        $dto->qualityCheckGeographical = $this->source['qc_geo'];
        $dto->qualityCheckComplete = $this->source['qc_complete'];
        $dto->qualityCheckHouse = $this->source['qc_house'];
        $dto->qualityCheck = $this->source['qc'];
        $dto->unparsedParts = $this->source['unparsed_parts'];

        $metroAdapter = new CleanMetroStationsAdapter(['source' => $this->source['metro']]);
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