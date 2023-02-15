<?php

namespace nsusoft\dadata\types\interfaces\clean;

/**
 * @property string $source
 * @property string $result
 */
interface CleanInterface
{
    /**
     * @return string
     */
    public function getSource(): string;

    /**
     * @return int|null
     */
    public function getQualityCheck(): ?int;
}