<?php

namespace nsusoft\dadata\types\direct\traits;

trait FlatTrait
{
    /**
     * @inheritDoc
     */
    public function getFlatFiasId(): ?string
    {
        return $this->rawData['flat_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatCadastralNumber(): ?string
    {
        return $this->rawData['flat_cadnum'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatType(): ?string
    {
        return $this->rawData['flat_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatTypeFull(): ?string
    {
        return $this->rawData['flat_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlat(): ?string
    {
        return $this->rawData['flat'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatArea(): ?string
    {
        return $this->rawData['flat_area'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getFlatPrice(): ?string
    {
        return $this->rawData['flat_price'] ?? null;
    }
}