<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;

interface FactoryInterface
{
    /**
     * @param string $type
     * @param string $value
     * @return CleanInterface
     */
    public function clean(string $type, string $value): CleanInterface;

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return SuggestInterface
     */
    public function suggest(string $type, string $value, array $options = []): SuggestInterface;
}