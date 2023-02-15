<?php

namespace nsusoft\dadata\types\direct\traits;

trait CityTrait
{
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
}