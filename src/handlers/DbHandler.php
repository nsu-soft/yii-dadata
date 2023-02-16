<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\factories\DbFactory;
use nsusoft\dadata\factories\FactoryInterface;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use Psr\SimpleCache\InvalidArgumentException;

class DbHandler extends BaseHandler
{
    /**
     * @inheritDoc
     * @throws CacheException
     * @throws InvalidArgumentException
     */
    public function clean(string $type, string $value): ?CleanInterface
    {
        $factory = $this->createFactory();
        $clean = $factory->createClean($type);
        $cache = $factory->createCleanCache($type);

        if ($cache->has($value)) {
            $clean->setSourceModel($cache->get($value));
            return $clean;
        }

        $cleanParent = parent::clean($type, $value);

        if (!$cache->set($value, $cleanParent)) {
            throw new CacheException(Module::t('main', "A cache saving was failed."));
        }

        $clean->setSourceModel($cache->get($value));

        return $clean;
    }

    /**
     * @return DbFactory
     */
    protected function createFactory(): FactoryInterface
    {
        return new DbFactory();
    }
}