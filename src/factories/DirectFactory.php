<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\types\direct\suggest\SuggestAddressDirect;
use nsusoft\dadata\types\direct\suggest\SuggestDirect;
use nsusoft\dadata\types\enums\SuggestType;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;
use nsusoft\dadata\types\direct\clean\CleanAddressDirect;
use nsusoft\dadata\types\direct\clean\CleanBirthdateDirect;
use nsusoft\dadata\types\direct\clean\CleanEmailDirect;
use nsusoft\dadata\types\direct\clean\CleanNameDirect;
use nsusoft\dadata\types\direct\clean\CleanPassportDirect;
use nsusoft\dadata\types\direct\clean\CleanPhoneDirect;
use nsusoft\dadata\types\direct\clean\CleanDirect;
use nsusoft\dadata\types\direct\clean\CleanVehicleDirect;
use yii\base\InvalidCallException;

class DirectFactory extends BaseFactory
{
    /**
     * @inheritDoc
     * @return CleanDirect
     */
    public function createClean(string $type): CleanInterface
    {
        if (CleanType::ADDRESS === $type) {
            return new CleanAddressDirect();
        } else if (CleanType::PHONE === $type) {
            return new CleanPhoneDirect();
        } else if (CleanType::NAME === $type) {
            return new CleanNameDirect();
        } else if (CleanType::EMAIL === $type) {
            return new CleanEmailDirect();
        } else if (CleanType::PASSPORT === $type) {
            return new CleanPassportDirect();
        } else if (CleanType::BIRTHDATE === $type) {
            return new CleanBirthdateDirect();
        } else if (CleanType::VEHICLE === $type) {
            return new CleanVehicleDirect();
        }

        throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
    }

    /**
     * @param string $type
     * @return SuggestDirect
     */
    public function createSuggest(string $type): SuggestInterface
    {
        if (SuggestType::ADDRESS === $type) {
            return new SuggestAddressDirect();
        }
//        else if (SuggestType::PARTY === $type) {
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