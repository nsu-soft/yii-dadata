<?php

namespace nsusoft\dadata\interfaces;

use Psr\SimpleCache\CacheInterface;

interface CleanCacheInterface extends CacheInterface
{
    /**
     * Sets source class name for clean active record.
     * @param string $sourceClass
     * @return void
     */
    public function setSourceClass(string $sourceClass): void;

    /**
     * Sets result class name for clean active record.
     * @param string $resultClass
     * @return void
     */
    public function setResultClass(string $resultClass): void;
}