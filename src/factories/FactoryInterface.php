<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\adapters\dto\AdapterInterface;

interface FactoryInterface
{
    /**
     * @param string $type
     * @return AdapterInterface
     */
    public function createClean(string $type): AdapterInterface;

    /**
     * @param string $type
     * @return AdapterInterface
     */
    public function createSuggest(string $type): AdapterInterface;
}