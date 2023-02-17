<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\factories\DbFactory;
use nsusoft\dadata\factories\FactoryInterface;
use nsusoft\dadata\Module;
use Psr\SimpleCache\InvalidArgumentException;

class DbHandler extends BaseHandler
{
    /**
     * @inheritDoc
     * @throws CacheException
     * @throws InvalidArgumentException
     */
    public function clean(string $type, string $value): ?DtoInterface
    {
        $factory = $this->createFactory();
        $adapter = $factory->createClean($type);
        $cache = $factory->createCleanCache($type);

        if ($cache->has($value)) {
            $adapter->setSource($cache->get($value));
            return $adapter->populate();
        }

        $cleanParent = parent::clean($type, $value);

        if (!$cache->set($value, $cleanParent)) {
            throw new CacheException(Module::t('main', "A cache saving was failed."));
        }

        $adapter->setSource($cache->get($value));

        return $adapter->populate();
    }

    /**
     * @return DbFactory
     */
    protected function createFactory(): FactoryInterface
    {
        return new DbFactory();
    }
}