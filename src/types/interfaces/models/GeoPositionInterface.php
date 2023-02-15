<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $geographicalLatitude
 * @property string|null $geographicalLongitude
 * @property int|null $qualityCheckGeographical
 */
interface GeoPositionInterface
{
    /**
     * @return string|null
     */
    public function getGeographicalLatitude(): ?string;

    /**
     * @return string|null
     */
    public function getGeographicalLongitude(): ?string;

    /**
     * @return int|null
     */
    public function getQualityCheckGeographical(): ?int;
}