<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $cityFiasId
 * @property string|null $cityKladrId
 * @property string|null $cityWithType
 * @property string|null $cityType
 * @property string|null $cityTypeFull
 * @property string|null $city
 */
interface CityInterface
{
    /**
     * @return string|null
     */
    public function getCityFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getCityKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getCityWithType(): ?string;

    /**
     * @return string|null
     */
    public function getCityType(): ?string;

    /**
     * @return string|null
     */
    public function getCityTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getCity(): ?string;
}