<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $areaFiasId
 * @property string|null $areaKladrId
 * @property string|null $areaWithType
 * @property string|null $areaType
 * @property string|null $areaTypeFull
 * @property string|null $area
 */
interface AreaInterface
{
    /**
     * @return string|null
     */
    public function getAreaFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getAreaKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getAreaWithType(): ?string;

    /**
     * @return string|null
     */
    public function getAreaType(): ?string;

    /**
     * @return string|null
     */
    public function getAreaTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getArea(): ?string;
}