<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;

interface FactoryInterface
{
    /**
     * @param string $type
     * @return CleanInterface
     */
    public function createClean(string $type): CleanInterface;

    /**
     * @param string $type
     * @return SuggestInterface
     */
    public function createSuggest(string $type): SuggestInterface;
}