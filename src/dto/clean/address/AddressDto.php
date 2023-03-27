<?php

namespace nsusoft\dadata\dto\clean\address;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/clean/address/
 */
class AddressDto implements DtoInterface
{
    /**
     * @var string
     */
    public $source;
    /**
     * @var string|null
     */
    public $result;
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
    public $cityArea;
    /**
     * @var string|null
     */
    public $cityDistrictFiasId;
    /**
     * @var string|null
     */
    public $cityDistrictKladrId;
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
    public $houseFiasId;
    /**
     * @var string|null
     */
    public $houseKladrId;
    /**
     * @var string|null
     */
    public $houseCadastralNumber;
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
    public $entrance;
    /**
     * @var string|null
     */
    public $floor;
    /**
     * @var string|null
     */
    public $flatFiasId;
    /**
     * @var string|null
     */
    public $flatCadastralNumber;
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
     * @var int|null
     */
    public $fiasActualityState;
    /**
     * @var string|null
     */
    public $kladrId;
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
     * @var string|null
     */
    public $timezone;
    /**
     * @var string|null
     */
    public $latitude;
    /**
     * @var string|null
     */
    public $longitude;
    /**
     * @var string|null
     */
    public $beltwayHit;
    /**
     * @var string|null
     */
    public $beltwayDistance;
    /**
     * @var int|null
     */
    public $qualityCheckGeographical;
    /**
     * @var int|null
     */
    public $qualityCheckComplete;
    /**
     * @var int|null
     */
    public $qualityCheckHouse;
    /**
     * @var int|null
     */
    public $qualityCheck;
    /**
     * @var string|null
     */
    public $unparsedParts;
    /**
     * @var MetroStationDto[]
     */
    public $metro = [];
}