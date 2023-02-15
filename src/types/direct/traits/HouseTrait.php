<?php

namespace nsusoft\dadata\types\direct\traits;

trait HouseTrait
{
    /**
     * @inheritDoc
     */
    public function getHouseFiasId(): ?string
    {
        return $this->rawData['house_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseKladrId(): ?string
    {
        return $this->rawData['house_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseCadastralNumber(): ?string
    {
        return $this->rawData['house_cadnum'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseType(): ?string
    {
        return $this->rawData['house_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouseTypeFull(): ?string
    {
        return $this->rawData['house_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getHouse(): ?string
    {
        return $this->rawData['house'] ?? null;
    }
}