<?php

namespace nsusoft\dadata\types\direct\traits;

trait SettlementTrait
{
    /**
     * @inheritDoc
     */
    public function getSettlementFiasId(): ?string
    {
        return $this->rawData['settlement_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementKladrId(): ?string
    {
        return $this->rawData['settlement_kladr_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementWithType(): ?string
    {
        return $this->rawData['settlement_with_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementType(): ?string
    {
        return $this->rawData['settlement_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlementTypeFull(): ?string
    {
        return $this->rawData['settlement_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getSettlement(): ?string
    {
        return $this->rawData['settlement'] ?? null;
    }
}