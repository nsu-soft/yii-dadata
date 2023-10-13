<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\cache\interfaces\ExtendedCacheInterface;
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

    /**
     * @param string $type
     * @return CacheInterface
     */
    public function createFindByIdCache(string $type): CacheInterface;

    /**
     * @param string $type
     * @return ExtendedCacheInterface
     */
    public function createFindByIdExtendedCache(string $type): ExtendedCacheInterface;
}