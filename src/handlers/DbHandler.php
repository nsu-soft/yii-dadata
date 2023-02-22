<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\factories\DbFactory;
use nsusoft\dadata\factories\FactoryInterface;
use nsusoft\dadata\Module;
use Psr\SimpleCache\InvalidArgumentException;

/**
 * Use this class in Module configuration, if you want to save DaData API responses in local database.
 *
 * You should apply migrations before using it.
 *
 * Usage example:
 * ```php
 * // config/web.php
 * 'modules' => [
 *     'dadata' => [
 *         'class' => 'nsusoft\dadata\Module',
 *         'cachePriority' => [DbHandler::class],
 *     ],
 * ],
 * ```
 */
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

        if (is_null($adapter)) {
            return parent::clean($type, $value);
        }

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