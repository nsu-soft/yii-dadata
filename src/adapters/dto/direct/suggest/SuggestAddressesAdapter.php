<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\suggest\AddressDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class SuggestAddressesAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return AddressDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->postalCode = $item['data']['postal_code'];
            $dto->country = $item['data']['country'];
            $dto->countryIsoCode = $item['data']['country_iso_code'];
            $dto->federalDistrict = $item['data']['federal_district'];
            $dto->regionFiasId = $item['data']['region_fias_id'];
            $dto->regionKladrId = $item['data']['region_kladr_id'];
            $dto->regionIsoCode = $item['data']['region_iso_code'];
            $dto->regionWithType = $item['data']['region_with_type'];
            $dto->regionType = $item['data']['region_type'];
            $dto->regionTypeFull = $item['data']['region_type_full'];
            $dto->region = $item['data']['region'];
            $dto->areaFiasId = $item['data']['area_fias_id'];
            $dto->areaKladrId = $item['data']['area_kladr_id'];
            $dto->areaWithType = $item['data']['area_with_type'];
            $dto->areaType = $item['data']['area_type'];
            $dto->areaTypeFull = $item['data']['area_type_full'];
            $dto->area = $item['data']['area'];
            $dto->subAreaFiasId = $item['data']['sub_area_fias_id'];
            $dto->subAreaKladrId = $item['data']['sub_area_kladr_id'];
            $dto->subAreaWithType = $item['data']['sub_area_with_type'];
            $dto->subAreaType = $item['data']['sub_area_type'];
            $dto->subAreaTypeFull = $item['data']['sub_area_type_full'];
            $dto->subArea = $item['data']['sub_area'];
            $dto->cityFiasId = $item['data']['city_fias_id'];
            $dto->cityKladrId = $item['data']['city_kladr_id'];
            $dto->cityWithType = $item['data']['city_with_type'];
            $dto->cityType = $item['data']['city_type'];
            $dto->cityTypeFull = $item['data']['city_type_full'];
            $dto->city = $item['data']['city'];
            $dto->cityDistrictFiasId = $item['data']['city_district_fias_id'];
            $dto->cityDistrictWithType = $item['data']['city_district_with_type'];
            $dto->cityDistrictType = $item['data']['city_district_type'];
            $dto->cityDistrictTypeFull = $item['data']['city_district_type_full'];
            $dto->cityDistrict = $item['data']['city_district'];
            $dto->settlementFiasId = $item['data']['settlement_fias_id'];
            $dto->settlementKladrId = $item['data']['settlement_kladr_id'];
            $dto->settlementWithType = $item['data']['settlement_with_type'];
            $dto->settlementType = $item['data']['settlement_type'];
            $dto->settlementTypeFull = $item['data']['settlement_type_full'];
            $dto->settlement = $item['data']['settlement'];
            $dto->streetFiasId = $item['data']['street_fias_id'];
            $dto->streetKladrId = $item['data']['street_kladr_id'];
            $dto->streetWithType = $item['data']['street_with_type'];
            $dto->streetType = $item['data']['street_type'];
            $dto->streetTypeFull = $item['data']['street_type_full'];
            $dto->street = $item['data']['street'];
            $dto->steadFiasId = $item['data']['stead_fias_id'];
            $dto->steadKladrId = $item['data']['stead_kladr_id'];
            $dto->steadType = $item['data']['stead_type'];
            $dto->steadTypeFull = $item['data']['stead_type_full'];
            $dto->stead = $item['data']['stead'];
            $dto->houseFiasId = $item['data']['house_fias_id'];
            $dto->houseKladrId = $item['data']['house_kladr_id'];
            $dto->houseType = $item['data']['house_type'];
            $dto->houseTypeFull = $item['data']['house_type_full'];
            $dto->house = $item['data']['house'];
            $dto->blockType = $item['data']['block_type'];
            $dto->blockTypeFull = $item['data']['block_type_full'];
            $dto->block = $item['data']['block'];
            $dto->flatFiasId = $item['data']['flat_fias_id'];
            $dto->flatType = $item['data']['flat_type'];
            $dto->flatTypeFull = $item['data']['flat_type_full'];
            $dto->flat = $item['data']['flat'];
            $dto->roomFiasId = $item['data']['room_fias_id'];
            $dto->roomType = $item['data']['room_type'];
            $dto->roomTypeFull = $item['data']['room_type_full'];
            $dto->room = $item['data']['room'];
            $dto->postalBox = $item['data']['postal_box'];
            $dto->fiasId = $item['data']['fias_id'];
            $dto->fiasLevel = $item['data']['fias_level'];
            $dto->kladrId = $item['data']['kladr_id'];
            $dto->geoNameId = $item['data']['geoname_id'];
            $dto->capitalMarker = $item['data']['capital_marker'];
            $dto->okato = $item['data']['okato'];
            $dto->oktmo = $item['data']['oktmo'];
            $dto->taxOffice = $item['data']['tax_office'];
            $dto->taxOfficeLegal = $item['data']['tax_office_legal'];
            $dto->historyValues = $item['data']['history_values'];
            $dto->latitude = $item['data']['geo_lat'];
            $dto->longitude = $item['data']['geo_lon'];
            $dto->qualityCheckGeographical = $item['data']['qc_geo'];
            $dto->fiasActualityState = $item['data']['fias_actuality_state'];
            $dto->cityArea = $item['data']['city_area'];
            $dto->beltwayHit = $item['data']['beltway_hit'];
            $dto->beltwayDistance = $item['data']['beltway_distance'];
            $dto->steadCadastralNumber = $item['data']['stead_cadnum'];
            $dto->houseCadastralNumber = $item['data']['house_cadnum'];
            $dto->flatCadastralNumber = $item['data']['flat_cadnum'];
            $dto->flatArea = $item['data']['flat_area'];
            $dto->squareMeterPrice = $item['data']['square_meter_price'];
            $dto->flatPrice = $item['data']['flat_price'];
            $dto->timezone = $item['data']['timezone'];

            $metroAdapter = new SuggestMetroStationsAdapter(['source' => $item['data']['metro'] ?? []]);
            $dto->metro = $metroAdapter->populate();

            $result[] = $dto;
        }

        return $result;
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