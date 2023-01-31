<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\types\db\clean\CleanAddressDb;
use nsusoft\dadata\types\db\clean\CleanBirthdateDb;
use nsusoft\dadata\types\db\clean\CleanDb;
use nsusoft\dadata\types\db\clean\CleanEmailDb;
use nsusoft\dadata\types\db\clean\CleanNameDb;
use nsusoft\dadata\types\db\clean\CleanPassportDb;
use nsusoft\dadata\types\db\clean\CleanPhoneDb;
use nsusoft\dadata\types\db\clean\CleanVehicleDb;
use nsusoft\dadata\cache\db\clean\CleanAddressCache;
use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;
use yii\base\InvalidCallException;

class DbCacheFactory extends BaseFactory
{
    /**
     * @inheritDoc
     * @return CleanDb
     * @throws InvalidArgumentException
     * @throws CacheException
     */
    public function clean(string $type, string $value): CleanInterface
    {
        if (!CleanType::exists($type)) {
            throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
        }

        $cache = $this->getCleanCache($type);
        $wrapper = $this->getCleanData($type);

        if (!$cache->has($value) && !$cache->set($value, $this->getClient()->clean($type, $value))) {
            throw new CacheException(Module::t('main', "A cache saving was failed."));
        }

        $wrapper->setSourceModel($cache->get($value));

        return $wrapper;
    }

    /**
     * @inheritDoc
     * @return CleanDb
     */
    protected function getCleanData(string $type): CleanInterface
    {
        if (CleanType::CLEAN_TYPE_ADDRESS === $type) {
            return new CleanAddressDb();
        } else if (CleanType::CLEAN_TYPE_PHONE === $type) {
            return new CleanPhoneDb();
        } else if (CleanType::CLEAN_TYPE_NAME === $type) {
            return new CleanNameDb();
        } else if (CleanType::CLEAN_TYPE_EMAIL === $type) {
            return new CleanEmailDb();
        } else if (CleanType::CLEAN_TYPE_PASSPORT === $type) {
            return new CleanPassportDb();
        } else if (CleanType::CLEAN_TYPE_BIRTHDATE === $type) {
            return new CleanBirthdateDb();
        } else if (CleanType::CLEAN_TYPE_VEHICLE === $type) {
            return new CleanVehicleDb();
        }

        throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
    }

    /**
     * @param string $type
     * @return CacheInterface
     */
    private function getCleanCache(string $type): CacheInterface
    {
        if (CleanType::CLEAN_TYPE_ADDRESS === $type) {
            return new CleanAddressCache();
        }
//        else if (CleanType::CLEAN_TYPE_PHONE === $type) {
//            return new CleanPhoneAdapter();
//        } else if (CleanType::CLEAN_TYPE_NAME === $type) {
//            return new CleanNameAdapter();
//        } else if (CleanType::CLEAN_TYPE_EMAIL === $type) {
//            return new CleanEmailAdapter();
//        } else if (CleanType::CLEAN_TYPE_PASSPORT === $type) {
//            return new CleanPassportAdapter();
//        } else if (CleanType::CLEAN_TYPE_BIRTHDATE === $type) {
//            return new CleanBirthdateAdapter();
//        } else if (CleanType::CLEAN_TYPE_VEHICLE === $type) {
//            return new CleanVehicleAdapter();
//        }

        throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
    }
}