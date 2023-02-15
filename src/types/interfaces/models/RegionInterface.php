<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $regionFiasId
 * @property string|null $regionKladrId
 * @property string|null $regionIsoCode
 * @property string|null $regionWithType
 * @property string|null $regionType
 * @property string|null $regionTypeFull
 * @property string|null $region
 */
interface RegionInterface
{
    /**
     * @return string|null
     */
    public function getRegionFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getRegionKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getRegionIsoCode(): ?string;

    /**
     * @return string|null
     */
    public function getRegionWithType(): ?string;

    /**
     * @return string|null
     */
    public function getRegionType(): ?string;

    /**
     * @return string|null
     */
    public function getRegionTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getRegion(): ?string;
}