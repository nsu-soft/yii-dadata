<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\clean\address\MetroStationDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/address/
 */
class AddressDto implements DtoInterface
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $unrestrictedValue;
    /**
     * @var string|null
     */
    public $postalCode;
    /**
     * @var string|null
     */
    public $country;
    /**
     * @var string|null
     */
    public $countryIsoCode;
    /**
     * @var string|null
     */
    public $federalDistrict;
    /**
     * @var string|null
     */
    public $regionFiasId;
    /**
     * @var string|null
     */
    public $regionKladrId;
    /**
     * @var string|null
     */
    public $regionIsoCode;
    /**
     * @var string|null
     */
    public $regionWithType;
    /**
     * @var string|null
     */
    public $regionType;
    /**
     * @var string|null
     */
    public $regionTypeFull;
    /**
     * @var string|null
     */
    public $region;
    /**
     * @var string|null
     */
    public $areaFiasId;
    /**
     * @var string|null
     */
    public $areaKladrId;
    /**
     * @var string|null
     */
    public $areaWithType;
    /**
     * @var string|null
     */
    public $areaType;
    /**
     * @var string|null
     */
    public $areaTypeFull;
    /**
     * @var string|null
     */
    public $area;
    /**
     * @var string|null
     */
    public $subAreaFiasId;
    /**
     * @var string|null
     */
    public $subAreaKladrId;
    /**
     * @var string|null
     */
    public $subAreaWithType;
    /**
     * @var string|null
     */
    public $subAreaType;
    /**
     * @var string|null
     */
    public $subAreaTypeFull;
    /**
     * @var string|null
     */
    public $subArea;
    /**
     * @var string|null
     */
    public $cityFiasId;
    /**
     * @var string|null
     */
    public $cityKladrId;
    /**
     * @var string|null
     */
    public $cityWithType;
    /**
     * @var string|null
     */
    public $cityType;
    /**
     * @var string|null
     */
    public $cityTypeFull;
    /**
     * @var string|null
     */
    public $city;
    /**
     * @var string|null
     */
    public $cityDistrictFiasId;
    /**
     * @var string|null
     */
    public $cityDistrictWithType;
    /**
     * @var string|null
     */
    public $cityDistrictType;
    /**
     * @var string|null
     */
    public $cityDistrictTypeFull;
    /**
     * @var string|null
     */
    public $cityDistrict;
    /**
     * @var string|null
     */
    public $settlementFiasId;
    /**
     * @var string|null
     */
    public $settlementKladrId;
    /**
     * @var string|null
     */
    public $settlementWithType;
    /**
     * @var string|null
     */
    public $settlementType;
    /**
     * @var string|null
     */
    public $settlementTypeFull;
    /**
     * @var string|null
     */
    public $settlement;
    /**
     * @var string|null
     */
    public $streetFiasId;
    /**
     * @var string|null
     */
    public $streetKladrId;
    /**
     * @var string|null
     */
    public $streetWithType;
    /**
     * @var string|null
     */
    public $streetType;
    /**
     * @var string|null
     */
    public $streetTypeFull;
    /**
     * @var string|null
     */
    public $street;
    /**
     * @var string|null
     */
    public $steadFiasId;
    /**
     * @var string|null
     */
    public $steadKladrId;
    /**
     * @var string|null
     */
    public $steadType;
    /**
     * @var string|null
     */
    public $steadTypeFull;
    /**
     * @var string|null
     */
    public $stead;
    /**
     * @var string|null
     */
    public $houseFiasId;
    /**
     * @var string|null
     */
    public $houseKladrId;
    /**
     * @var string|null
     */
    public $houseType;
    /**
     * @var string|null
     */
    public $houseTypeFull;
    /**
     * @var string|null
     */
    public $house;
    /**
     * @var string|null
     */
    public $blockType;
    /**
     * @var string|null
     */
    public $blockTypeFull;
    /**
     * @var string|null
     */
    public $block;
    /**
     * @var string|null
     */
    public $flatFiasId;
    /**
     * @var string|null
     */
    public $flatType;
    /**
     * @var string|null
     */
    public $flatTypeFull;
    /**
     * @var string|null
     */
    public $flat;
    /**
     * @var string|null
     */
    public $roomFiasId;
    /**
     * @var string|null
     */
    public $roomType;
    /**
     * @var string|null
     */
    public $roomTypeFull;
    /**
     * @var string|null
     */
    public $room;
    /**
     * @var string|null
     */
    public $postalBox;
    /**
     * @var string|null
     */
    public $fiasId;
    /**
     * @var int|null
     */
    public $fiasLevel;
    /**
     * @var string|null
     */
    public $kladrId;
    /**
     * @var string|null
     */
    public $geoNameId;
    /**
     * @var int|null
     */
    public $capitalMarker;
    /**
     * @var string|null
     */
    public $okato;
    /**
     * @var string|null
     */
    public $oktmo;
    /**
     * @var string|null
     */
    public $taxOffice;
    /**
     * @var string|null
     */
    public $taxOfficeLegal;
    /**
     * @var array
     */
    public $historyValues = [];
    /**
     * @var string|null
     */
    public $latitude;
    /**
     * @var string|null
     */
    public $longitude;
    /**
     * @var int|null
     */
    public $qualityCheckGeographical;
    /**
     * @var int|null
     */
    public $fiasActualityState;
    /**
     * @var string|null
     */
    public $cityArea;
    /**
     * @var string|null
     */
    public $beltwayHit;
    /**
     * @var string|null
     */
    public $beltwayDistance;
    /**
     * @var string|null
     */
    public $steadCadastralNumber;
    /**
     * @var string|null
     */
    public $houseCadastralNumber;
    /**
     * @var string|null
     */
    public $flatCadastralNumber;
    /**
     * @var string|null
     */
    public $flatArea;
    /**
     * @var string|null
     */
    public $squareMeterPrice;
    /**
     * @var string|null
     */
    public $flatPrice;
    /**
     * @var string|null
     */
    public $timezone;
    /**
     * @var MetroStationDto[]
     */
    public $metro = [];
}