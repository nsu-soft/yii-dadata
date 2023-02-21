<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\adapters\dto\AdapterInterface;
use nsusoft\dadata\adapters\dto\direct\clean\address\CleanAddressesAdapter;
use nsusoft\dadata\adapters\dto\direct\clean\CleanPhoneAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\address\SuggestAddressesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\bank\SuggestBanksAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\parties\SuggestPartiesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestCarBrandsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestCountriesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestCurrenciesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestEmailsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestFmsUnitsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestFnsUnitsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestFtsUnitsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestMetroStationsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestMktuItemsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestNamesAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestOkpdItemsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestOktmoAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestOkvedItemsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestPostalUnitsAdapter;
use nsusoft\dadata\adapters\dto\direct\suggest\SuggestRegionCourtsAdapter;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\enums\FindByIdType;
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
        } else if (CleanType::PHONE === $type) {
            return new CleanPhoneAdapter();
        }
//        else if (CleanType::NAME === $type) {
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
        } else if (SuggestType::NAME === $type) {
            return new SuggestNamesAdapter();
        } else if (SuggestType::EMAIL === $type) {
            return new SuggestEmailsAdapter();
        } else if (SuggestType::FMS_UNIT === $type) {
            return new SuggestFmsUnitsAdapter();
        } else if (SuggestType::POSTAL_UNIT === $type) {
            return new SuggestPostalUnitsAdapter();
        } else if (SuggestType::FNS_UNIT === $type) {
            return new SuggestFnsUnitsAdapter();
        } else if (SuggestType::FTS_UNIT === $type) {
            return new SuggestFtsUnitsAdapter();
        } else if (SuggestType::REGION_COURT === $type) {
            return new SuggestRegionCourtsAdapter();
        } else if (SuggestType::METRO === $type) {
            return new SuggestMetroStationsAdapter();
        } else if (SuggestType::CAR_BRAND === $type) {
            return new SuggestCarBrandsAdapter();
        } else if (SuggestType::MKTU === $type) {
            return new SuggestMktuItemsAdapter();
        } else if (SuggestType::COUNTRY === $type) {
            return new SuggestCountriesAdapter();
        } else if (SuggestType::CURRENCY === $type) {
            return new SuggestCurrenciesAdapter();
        } else if (SuggestType::OKVED === $type) {
            return new SuggestOkvedItemsAdapter();
        } else if (SuggestType::OKPD === $type) {
            return new SuggestOkpdItemsAdapter();
        }

        throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
    }

    /**
     * @inheritDoc
     */
    public function createFindById(string $type): AdapterInterface
    {
        if (FindByIdType::POSTAL_UNIT === $type) {
            return new SuggestPostalUnitsAdapter();
        } else if (FindByIdType::FNS_UNIT === $type) {
            return new SuggestFnsUnitsAdapter();
        } else if (FindByIdType::FTS_UNIT === $type) {
            return new SuggestFtsUnitsAdapter();
        } else if (FindByIdType::REGION_COURT === $type) {
            return new SuggestRegionCourtsAdapter();
        } else if (FindByIdType::CAR_BRAND === $type) {
            return new SuggestCarBrandsAdapter();
        } else if (FindByIdType::MKTU === $type) {
            return new SuggestMktuItemsAdapter();
        } else if (FindByIdType::COUNTRY === $type) {
            return new SuggestCountriesAdapter();
        } else if (FindByIdType::CURRENCY === $type) {
            return new SuggestCurrenciesAdapter();
        } else if (FindByIdType::OKVED === $type) {
            return new SuggestOkvedItemsAdapter();
        } else if (FindByIdType::OKPD === $type) {
            return new SuggestOkpdItemsAdapter();
        } else if (FindByIdType::OKTMO === $type) {
            return new SuggestOktmoAdapter();
        }

        throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
    }
}