<?php

namespace nsusoft\dadata\types\direct\traits;

trait BlockTrait
{
    /**
     * @inheritDoc
     */
    public function getBlockType(): ?string
    {
        return $this->rawData['block_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBlockTypeFull(): ?string
    {
        return $this->rawData['block_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBlock(): ?string
    {
        return $this->rawData['block'] ?? null;
    }
}