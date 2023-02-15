<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $postalCode
 * @property string|null $federalDistrict
 * @property string|null $cityArea
 * @property string|null $entrance
 * @property string|null $floor
 * @property string|null $postalBox
 * @property string|null $fiasId
 * @property int|null $fiasLevel
 * @property int|null $fiasActualityState
 * @property string|null $kladrId
 * @property int|null $capitalMarker
 */
interface AddressInterface extends
    CountryInterface,
    RegionInterface,
    AreaInterface,
    CityInterface,
    CityDistrictInterface,
    SettlementInterface,
    StreetInterface,
    HouseInterface,
    BlockInterface,
    FlatInterface
{
    /**
     * @return string|null
     */
    public function getPostalCode(): ?string;

    /**
     * @return string|null
     */
    public function getFederalDistrict(): ?string;

    /**
     * @return string|null
     */
    public function getCityArea(): ?string;

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
}