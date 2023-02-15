<?php

namespace nsusoft\dadata\types\direct\traits;

trait SteadTrait
{
    /**
     * @inheritDoc
     */
    public function getSteadFiasId(): ?string
    {
        return $this->rawData['stead_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSteadKladrId(): ?string
    {
        return $this->rawData['stead_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSteadCadastralNumber(): ?string
    {
        return $this->rawData['stead_cadnum'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSteadType(): ?string
    {
        return $this->rawData['stead_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSteadTypeFull(): ?string
    {
        return $this->rawData['stead_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStead(): ?string
    {
        return $this->rawData['stead'] ?? null;
    }
}