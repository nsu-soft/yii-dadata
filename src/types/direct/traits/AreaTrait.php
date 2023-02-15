<?php

namespace nsusoft\dadata\types\direct\traits;

trait AreaTrait
{
    /**
     * @inheritDoc
     */
    public function getAreaFiasId(): ?string
    {
        return $this->rawData['area_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaKladrId(): ?string
    {
        return $this->rawData['area_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaWithType(): ?string
    {
        return $this->rawData['area_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaType(): ?string
    {
        return $this->rawData['area_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getAreaTypeFull(): ?string
    {
        return $this->rawData['area_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getArea(): ?string
    {
        return $this->rawData['area'] ?? null;
    }
}