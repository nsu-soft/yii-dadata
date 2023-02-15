<?php

namespace nsusoft\dadata\types\direct\traits;

trait GeoPositionTrait
{
    /**
     * @inheritDoc
     */
    public function getGeographicalLatitude(): ?string
    {
        return $this->rawData['geo_lat'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getGeographicalLongitude(): ?string
    {
        return $this->rawData['geo_lon'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheckGeographical(): ?int
    {
        return $this->rawData['qc_geo'] ?? null;
    }
}