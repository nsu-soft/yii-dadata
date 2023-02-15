<?php

namespace nsusoft\dadata\types\direct\traits;

trait SubAreaTrait
{
    /**
     * @inheritDoc
     */
    public function getSubAreaFiasId(): ?string
    {
        return $this->rawData['sub_area_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSubAreaKladrId(): ?string
    {
        return $this->rawData['sub_area_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSubAreaWithType(): ?string
    {
        return $this->rawData['sub_area_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSubAreaType(): ?string
    {
        return $this->rawData['sub_area_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSubAreaTypeFull(): ?string
    {
        return $this->rawData['sub_area_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSubArea(): ?string
    {
        return $this->rawData['sub_area'] ?? null;
    }
}