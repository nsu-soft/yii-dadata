<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $subAreaFiasId
 * @property string|null $subAreaKladrId
 * @property string|null $subAreaWithType
 * @property string|null $subAreaType
 * @property string|null $subAreaTypeFull
 * @property string|null $subArea
 */
interface SubAreaInterface
{
    /**
     * @return string|null
     */
    public function getSubAreaFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getSubAreaKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getSubAreaWithType(): ?string;

    /**
     * @return string|null
     */
    public function getSubAreaType(): ?string;

    /**
     * @return string|null
     */
    public function getSubAreaTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getSubArea(): ?string;
}