<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $beltwayHit
 * @property string|null $beltwayDistance
 */
interface BeltwayInterface
{
    /**
     * @return string|null
     */
    public function getBeltwayHit(): ?string;

    /**
     * @return string|null
     */
    public function getBeltwayDistance(): ?string;
}