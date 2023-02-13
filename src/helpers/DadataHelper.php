<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;
use nsusoft\dadata\types\interfaces\clean\CleanBirthdateInterface;
use nsusoft\dadata\types\interfaces\clean\CleanEmailInterface;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\factories\DbCacheFactory;
use nsusoft\dadata\factories\DirectFactory;
use nsusoft\dadata\factories\FactoryInterface;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\interfaces\clean\CleanNameInterface;
use nsusoft\dadata\types\interfaces\clean\CleanPassportInterface;
use nsusoft\dadata\types\interfaces\clean\CleanPhoneInterface;
use nsusoft\dadata\types\interfaces\clean\CleanVehicleInterface;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;

class DadataHelper
{
    /**
     * @param string $type
     * @param string $value
     * @return CleanInterface
     */
    public static function clean(string $type, string $value): CleanInterface
    {
        return self::getFactory()->clean($type, $value);
    }

    /**
     * @param string $address
     * @return CleanAddressInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::address() instead of this method.
     */
    public static function cleanAddress(string $address): CleanInterface
    {
        return self::clean(CleanType::CLEAN_TYPE_ADDRESS, $address);
    }

    /**
     * @param string $phone
     * @return CleanPhoneInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::phone() instead of this method.
     */
    public static function cleanPhone(string $phone): CleanInterface
    {
        return self::clean(CleanType::CLEAN_TYPE_PHONE, $phone);
    }

    /**
     * @param string $name
     * @return CleanNameInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::name() instead of this method.
     */
    public static function cleanName(string $name): CleanInterface
    {
        return self::clean(CleanType::CLEAN_TYPE_NAME, $name);
    }

    /**
     * @param string $email
     * @return CleanEmailInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::email() instead of this method.
     */
    public static function cleanEmail(string $email): CleanInterface
    {
        return self::clean(CleanType::CLEAN_TYPE_EMAIL, $email);
    }

    /**
     * @param string $passport
     * @return CleanPassportInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::passport() instead of this method.
     */
    public static function cleanPassport(string $passport): CleanInterface
    {
        return self::clean(CleanType::CLEAN_TYPE_PASSPORT, $passport);
    }

    /**
     * @param string $birthdate
     * @return CleanBirthdateInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::birthdate() instead of this method.
     */
    public static function cleanBirthdate(string $birthdate): CleanInterface
    {
        return self::clean(CleanType::CLEAN_TYPE_BIRTHDATE, $birthdate);
    }

    /**
     * @param string $vehicle
     * @return CleanVehicleInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::vehicle() instead of this method.
     */
    public static function cleanVehicle(string $vehicle): CleanInterface
    {
        return self::clean(CleanType::CLEAN_TYPE_VEHICLE, $vehicle);
    }

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return SuggestInterface
     */
    public static function suggest(string $type, string $value, array $options = []): SuggestInterface
    {
        return self::getFactory()->suggest($type, $value, $options);
    }

    /**
     * @return FactoryInterface
     */
    private static function getFactory(): FactoryInterface
    {
        if (Module::getInstance()->enableDbCache) {
            return new DbCacheFactory();
        } else {
            return new DirectFactory();
        }
    }
}