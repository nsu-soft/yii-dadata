<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\adapters\dto\AdapterInterface;
use nsusoft\dadata\adapters\dto\db\clean\CleanAddressAdapter;
use nsusoft\dadata\cache\db\clean\CleanAddressCache;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use Psr\SimpleCache\CacheInterface;
use yii\base\InvalidCallException;

class DbFactory extends BaseFactory implements CacheFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createClean(string $type): AdapterInterface
    {
        if (CleanType::ADDRESS === $type) {
            return new CleanAddressAdapter();
        }
//        else if (CleanType::PHONE === $type) {
//
//        } else if (CleanType::NAME === $type) {
//
//        } else if (CleanType::EMAIL === $type) {
//
//        } else if (CleanType::PASSPORT === $type) {
//
//        } else if (CleanType::BIRTHDATE === $type) {
//
//        } else if (CleanType::VEHICLE === $type) {
//
//        }

        throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
    }

    /**
     * @inheritDoc
     */
    public function createSuggest(string $type): AdapterInterface
    {
//        if (SuggestType::ADDRESS === $type) {
//
//        } else if (SuggestType::PARTY === $type) {
//
//        } else if (SuggestType::BANK === $type) {
//
//        } else if (SuggestType::NAME === $type) {
//
//        } else if (SuggestType::EMAIL === $type) {
//
//        } else if (SuggestType::FMS_UNIT === $type) {
//
//        } else if (SuggestType::POSTAL_UNIT === $type) {
//
//        } else if (SuggestType::FNS_UNIT === $type) {
//
//        } else if (SuggestType::FTS_UNIT === $type) {
//
//        } else if (SuggestType::REGION_COURT === $type) {
//
//        } else if (SuggestType::METRO === $type) {
//
//        } else if (SuggestType::CAR_BRAND === $type) {
//
//        } else if (SuggestType::MKTU === $type) {
//
//        } else if (SuggestType::COUNTRY === $type) {
//
//        } else if (SuggestType::CURRENCY === $type) {
//
//        } else if (SuggestType::OKVED === $type) {
//
//        } else if (SuggestType::OKPD === $type) {
//
//        }

        throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
    }

    /**
     * @inheritDoc
     */
    public function createFindById(string $type): AdapterInterface
    {
//        if (FindByIdType::POSTAL_UNIT === $type) {
//
//        } else if (FindByIdType::FNS_UNIT === $type) {
//
//        } else if (FindByIdType::FTS_UNIT === $type) {
//
//        } else if (FindByIdType::REGION_COURT === $type) {
//
//        } else if (FindByIdType::CAR_BRAND === $type) {
//
//        } else if (FindByIdType::MKTU === $type) {
//
//        } else if (FindByIdType::COUNTRY === $type) {
//
//        } else if (FindByIdType::CURRENCY === $type) {
//
//        } else if (FindByIdType::OKVED === $type) {
//
//        } else if (FindByIdType::OKPD === $type) {
//
//        } else if (FindByIdType::OKTMO === $type) {
//
//        }

        throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
    }

    /**
     * @inheritDoc
     */
    public function createCleanCache(string $type): CacheInterface
    {
        if (CleanType::ADDRESS === $type) {
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

    /**
     * @inheritDoc
     */
    public function createSuggestCache(string $type): CacheInterface
    {
//        if (SuggestType::ADDRESS === $type) {
//
//        } else if (SuggestType::PARTY === $type) {
//
//        } else if (SuggestType::BANK === $type) {
//
//        } else if (SuggestType::NAME === $type) {
//
//        } else if (SuggestType::EMAIL === $type) {
//
//        } else if (SuggestType::FMS_UNIT === $type) {
//
//        } else if (SuggestType::POSTAL_UNIT === $type) {
//
//        } else if (SuggestType::FNS_UNIT === $type) {
//
//        } else if (SuggestType::FTS_UNIT === $type) {
//
//        } else if (SuggestType::REGION_COURT === $type) {
//
//        } else if (SuggestType::METRO === $type) {
//
//        } else if (SuggestType::CAR_BRAND === $type) {
//
//        } else if (SuggestType::MKTU === $type) {
//
//        } else if (SuggestType::COUNTRY === $type) {
//
//        } else if (SuggestType::CURRENCY === $type) {
//
//        } else if (SuggestType::OKVED === $type) {
//
//        } else if (SuggestType::OKPD === $type) {
//
//        }

        throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
    }

    public function createFindByIdCache(string $type): CacheInterface
    {
//        if (FindByIdType::POSTAL_UNIT === $type) {
//
//        } else if (FindByIdType::FNS_UNIT === $type) {
//
//        } else if (FindByIdType::FTS_UNIT === $type) {
//
//        } else if (FindByIdType::REGION_COURT === $type) {
//
//        } else if (FindByIdType::CAR_BRAND === $type) {
//
//        } else if (FindByIdType::MKTU === $type) {
//
//        } else if (FindByIdType::COUNTRY === $type) {
//
//        } else if (FindByIdType::CURRENCY === $type) {
//
//        } else if (FindByIdType::OKVED === $type) {
//
//        } else if (FindByIdType::OKPD === $type) {
//
//        } else if (FindByIdType::OKTMO === $type) {
//
//        }

        throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
    }
}