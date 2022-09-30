<?php

namespace nsusoft\dadata\cache\clean;

use nsusoft\dadata\interfaces\CleanCacheInterface;
use nsusoft\dadata\models\AddressResult;
use nsusoft\dadata\models\AddressSource;
use nsusoft\dadata\Module;
use yii\base\InvalidArgumentException;

class CleanCacheFactory
{
    /**
     * @param string $type
     * @return CleanCacheInterface
     */
    public static function getCacheHandler(string $type): CleanCacheInterface
    {
        if ('address' === $type) {
            return new CleanCache([
                'sourceClass' => AddressSource::class,
                'resultClass' => AddressResult::class,
            ]);
        }

        // TODO: connect here other cache handlers, when they were implemented

        throw new InvalidArgumentException(Module::t('main', "Invalid a clean cache type."));
    }
}