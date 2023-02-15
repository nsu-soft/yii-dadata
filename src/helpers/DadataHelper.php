<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\handlers\HandlerFactory;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;
use nsusoft\dadata\types\interfaces\clean\CleanBirthdateInterface;
use nsusoft\dadata\types\interfaces\clean\CleanEmailInterface;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
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
        return HandlerFactory::getChain()->clean($type, $value);
    }

    /**
     * @param string $address
     * @return CleanAddressInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::address() instead of this method.
     */
    public static function cleanAddress(string $address): CleanInterface
    {
        return self::clean(CleanType::ADDRESS, $address);
    }

    /**
     * @param string $phone
     * @return CleanPhoneInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::phone() instead of this method.
     */
    public static function cleanPhone(string $phone): CleanInterface
    {
        return self::clean(CleanType::PHONE, $phone);
    }

    /**
     * @param string $name
     * @return CleanNameInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::name() instead of this method.
     */
    public static function cleanName(string $name): CleanInterface
    {
        return self::clean(CleanType::NAME, $name);
    }

    /**
     * @param string $email
     * @return CleanEmailInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::email() instead of this method.
     */
    public static function cleanEmail(string $email): CleanInterface
    {
        return self::clean(CleanType::EMAIL, $email);
    }

    /**
     * @param string $passport
     * @return CleanPassportInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::passport() instead of this method.
     */
    public static function cleanPassport(string $passport): CleanInterface
    {
        return self::clean(CleanType::PASSPORT, $passport);
    }

    /**
     * @param string $birthdate
     * @return CleanBirthdateInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::birthdate() instead of this method.
     */
    public static function cleanBirthdate(string $birthdate): CleanInterface
    {
        return self::clean(CleanType::BIRTHDATE, $birthdate);
    }

    /**
     * @param string $vehicle
     * @return CleanVehicleInterface
     * @deprecated Will be removed in version v0.4. Use CleanHelper::vehicle() instead of this method.
     */
    public static function cleanVehicle(string $vehicle): CleanInterface
    {
        return self::clean(CleanType::VEHICLE, $vehicle);
    }

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return SuggestInterface[]
     */
    public static function suggest(string $type, string $value, array $options = []): array
    {
        return HandlerFactory::getChain()->suggest($type, $value, $options);
    }
}