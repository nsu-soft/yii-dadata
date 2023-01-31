<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;

interface FactoryInterface
{
    /**
     * @param string $type
     * @param string $value
     * @return CleanInterface
     */
    public function clean(string $type, string $value): CleanInterface;
}