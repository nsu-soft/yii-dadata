<?php

namespace nsusoft\dadata\types\direct\traits;

trait CityDistrictTrait
{
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
}