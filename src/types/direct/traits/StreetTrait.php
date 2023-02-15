<?php

namespace nsusoft\dadata\types\direct\traits;

trait StreetTrait
{
    /**
     * @inheritDoc
     */
    public function getStreetFiasId(): ?string
    {
        return $this->rawData['street_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetKladrId(): ?string
    {
        return $this->rawData['street_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetWithType(): ?string
    {
        return $this->rawData['street_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetType(): ?string
    {
        return $this->rawData['street_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreetTypeFull(): ?string
    {
        return $this->rawData['street_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getStreet(): ?string
    {
        return $this->rawData['street'] ?? null;
    }
}