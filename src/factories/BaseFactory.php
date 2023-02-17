<?php

namespace nsusoft\dadata\factories;

abstract class BaseFactory implements FactoryInterface
{
    /**
     * Checks if Factory is using cache.
     * @return bool
     */
    public function isCacheable(): bool
    {
        return $this instanceof CacheFactoryInterface;
    }
}