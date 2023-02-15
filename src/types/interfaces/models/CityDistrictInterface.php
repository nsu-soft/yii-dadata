<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $cityDistrictFiasId
 * @property string|null $cityDistrictKladrId
 * @property string|null $cityDistrictWithType
 * @property string|null $cityDistrictType
 * @property string|null $cityDistrictTypeFull
 * @property string|null $cityDistrict
 */
interface CityDistrictInterface
{
    /**
     * @return string|null
     */
    public function getCityDistrictFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictWithType(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictType(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrictTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getCityDistrict(): ?string;
}