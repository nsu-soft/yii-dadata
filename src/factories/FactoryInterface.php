<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\adapters\dto\AdapterInterface;

interface FactoryInterface
{
    /**
     * @param string $type
     * @return AdapterInterface|null
     */
    public function createClean(string $type): ?AdapterInterface;

    /**
     * @param string $type
     * @return AdapterInterface|null
     */
    public function createSuggest(string $type): ?AdapterInterface;

    /**
     * @param string $type
     * @return AdapterInterface|null
     */
    public function createFindById(string $type): ?AdapterInterface;
}