<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\adapters\dto\AdapterInterface;
use nsusoft\dadata\adapters\dto\direct\clean\CleanAddressesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\bank\SuggestBanksAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\parties\SuggestPartiesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestAddressesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestEmailsAdapter;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\enums\SuggestType;
use yii\base\InvalidCallException;

class DirectFactory extends BaseFactory
{
    /**
     * @inheritDoc
     * @return AdapterInterface
     */
    public function createClean(string $type): AdapterInterface
    {
        if (CleanType::ADDRESS === $type) {
            return new CleanAddressesAdapter();
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
     * @param string $type
     * @return AdapterInterface
     */
    public function createSuggest(string $type): AdapterInterface
    {
        if (SuggestType::ADDRESS === $type) {
            return new SuggestAddressesAdapter();
        } else if (SuggestType::PARTY === $type) {
            return new SuggestPartiesAdapter();
        } else if (SuggestType::BANK === $type) {
            return new SuggestBanksAdapter();
        }
//        else if (SuggestType::NAME === $type) {
//
//        }
        else if (SuggestType::EMAIL === $type) {
            return new SuggestEmailsAdapter();
        }
//        else if (SuggestType::FMS_UNIT === $type) {
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