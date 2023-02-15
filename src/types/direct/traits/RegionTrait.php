<?php

namespace nsusoft\dadata\types\direct\traits;

trait RegionTrait
{
    /**
     * @inheritDoc
     */
    public function getRegionFiasId(): ?string
    {
        return $this->rawData['region_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionKladrId(): ?string
    {
        return $this->rawData['region_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionIsoCode(): ?string
    {
        return $this->rawData['region_iso_code'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionWithType(): ?string
    {
        return $this->rawData['region_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionType(): ?string
    {
        return $this->rawData['region_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegionTypeFull(): ?string
    {
        return $this->rawData['region_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRegion(): ?string
    {
        return $this->rawData['region'] ?? null;
    }
}