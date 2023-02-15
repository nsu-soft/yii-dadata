<?php

namespace nsusoft\dadata\types\direct\clean;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\direct\BaseDirect;

abstract class CleanDirect extends BaseDirect implements CleanInterface
{
    /**
     * @inheritDoc
     */
    public function getSource(): string
    {
        return $this->rawData['source'];
    }

    /**
     * @inheritDoc
     */
    public function getQualityCheck(): ?int
    {
        return $this->rawData['qc'] ?? null;
    }
}