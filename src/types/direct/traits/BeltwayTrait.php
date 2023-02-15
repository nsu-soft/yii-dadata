<?php

namespace nsusoft\dadata\types\direct\traits;

trait BeltwayTrait
{
    /**
     * @inheritDoc
     */
    public function getBeltwayHit(): ?string
    {
        return $this->rawData['beltway_hit'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBeltwayDistance(): ?string
    {
        return $this->rawData['beltway_distance'] ?? null;
    }
}