<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $blockType
 * @property string|null $blockTypeFull
 * @property string|null $block
 */
interface BlockInterface
{
    /**
     * @return string|null
     */
    public function getBlockType(): ?string;

    /**
     * @return string|null
     */
    public function getBlockTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getBlock(): ?string;
}