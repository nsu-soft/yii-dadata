<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $settlementFiasId
 * @property string|null $settlementKladrId
 * @property string|null $settlementWithType
 * @property string|null $settlementType
 * @property string|null $settlementTypeFull
 * @property string|null $settlement
 */
interface SettlementInterface
{
    /**
     * @return string|null
     */
    public function getSettlementFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementWithType(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementType(): ?string;

    /**
     * @return string|null
     */
    public function getSettlementTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getSettlement(): ?string;
}