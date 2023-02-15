<?php

namespace nsusoft\dadata\factories;

use Psr\SimpleCache\CacheInterface;

interface CacheFactoryInterface
{
    /**
     * @param string $type
     * @return CacheInterface
     */
    public function createCleanCache(string $type): CacheInterface;

    /**
     * @param string $type
     * @return CacheInterface
     */
    public function createSuggestCache(string $type): CacheInterface;
}