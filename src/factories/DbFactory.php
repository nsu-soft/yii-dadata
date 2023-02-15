<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\types\db\clean\CleanAddressDb;
use nsusoft\dadata\types\db\clean\CleanBirthdateDb;
use nsusoft\dadata\types\db\clean\CleanEmailDb;
use nsusoft\dadata\types\db\clean\CleanNameDb;
use nsusoft\dadata\types\db\clean\CleanPassportDb;
use nsusoft\dadata\types\db\clean\CleanPhoneDb;
use nsusoft\dadata\types\db\clean\CleanVehicleDb;
use nsusoft\dadata\cache\db\clean\CleanAddressCache;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;
use Psr\SimpleCache\CacheInterface;
use yii\base\InvalidCallException;

class DbFactory extends BaseFactory implements CacheFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createClean(string $type): CleanInterface
    {
        if (CleanType::ADDRESS === $type) {
            return new CleanAddressDb();
        } else if (CleanType::PHONE === $type) {
            return new CleanPhoneDb();
        } else if (CleanType::NAME === $type) {
            return new CleanNameDb();
        } else if (CleanType::EMAIL === $type) {
            return new CleanEmailDb();
        } else if (CleanType::PASSPORT === $type) {
            return new CleanPassportDb();
        } else if (CleanType::BIRTHDATE === $type) {
            return new CleanBirthdateDb();
        } else if (CleanType::VEHICLE === $type) {
            return new CleanVehicleDb();
        }

        throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
    }

    /**
     * @inheritDoc
     */
    public function createSuggest(string $type): SuggestInterface
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
//        } else if (SuggestType::OKTMO === $type) {
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
//        } else if (SuggestType::OKTMO === $type) {
//
//        }

        throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
    }
}