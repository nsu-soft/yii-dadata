<?php

namespace nsusoft\dadata\types\direct\clean;

use nsusoft\dadata\types\direct\traits\AreaTrait;
use nsusoft\dadata\types\direct\traits\BeltwayTrait;
use nsusoft\dadata\types\direct\traits\BlockTrait;
use nsusoft\dadata\types\direct\traits\CityDistrictTrait;
use nsusoft\dadata\types\direct\traits\CityTrait;
use nsusoft\dadata\types\direct\traits\CountryTrait;
use nsusoft\dadata\types\direct\traits\FlatTrait;
use nsusoft\dadata\types\direct\traits\GeoPositionTrait;
use nsusoft\dadata\types\direct\traits\HouseTrait;
use nsusoft\dadata\types\direct\traits\RegionTrait;
use nsusoft\dadata\types\direct\traits\SettlementTrait;
use nsusoft\dadata\types\direct\traits\StreetTrait;
use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;

class CleanAddressDirect extends CleanDirect implements CleanAddressInterface
{
    use CountryTrait, RegionTrait, AreaTrait, CityTrait, CityDistrictTrait, SettlementTrait, StreetTrait, HouseTrait, BlockTrait, FlatTrait, BeltwayTrait, GeoPositionTrait;

    /**
     * @inheritDoc
     */
    public function getResult(): string
    {
        return $this->rawData['result'];
    }

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
    public function getFederalDistrict(): ?string
    {
        return $this->rawData['federal_district'] ?? null;
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
    public function getSquareMeterPrice(): ?string
    {
        return $this->rawData['square_meter_price'] ?? null;
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