<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;
use nsusoft\dadata\types\interfaces\clean\CleanBirthdateInterface;
use nsusoft\dadata\types\interfaces\clean\CleanEmailInterface;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\interfaces\clean\CleanNameInterface;
use nsusoft\dadata\types\interfaces\clean\CleanPassportInterface;
use nsusoft\dadata\types\interfaces\clean\CleanPhoneInterface;
use nsusoft\dadata\types\interfaces\clean\CleanVehicleInterface;

class CleanHelper
{
    /**
     * @param string $address
     * @return CleanAddressInterface
     */
    public static function address(string $address): CleanInterface
    {
        return DadataHelper::clean(CleanType::CLEAN_TYPE_ADDRESS, $address);
    }

    /**
     * @param string $phone
     * @return CleanPhoneInterface
     */
    public static function phone(string $phone): CleanInterface
    {
        return DadataHelper::clean(CleanType::CLEAN_TYPE_PHONE, $phone);
    }

    /**
     * @param string $name
     * @return CleanNameInterface
     */
    public static function name(string $name): CleanInterface
    {
        return DadataHelper::clean(CleanType::CLEAN_TYPE_NAME, $name);
    }

    /**
     * @param string $email
     * @return CleanEmailInterface
     */
    public static function email(string $email): CleanInterface
    {
        return DadataHelper::clean(CleanType::CLEAN_TYPE_EMAIL, $email);
    }

    /**
     * @param string $passport
     * @return CleanPassportInterface
     */
    public static function passport(string $passport): CleanInterface
    {
        return DadataHelper::clean(CleanType::CLEAN_TYPE_PASSPORT, $passport);
    }

    /**
     * @param string $birthdate
     * @return CleanBirthdateInterface
     */
    public static function birthdate(string $birthdate): CleanInterface
    {
        return DadataHelper::clean(CleanType::CLEAN_TYPE_BIRTHDATE, $birthdate);
    }

    /**
     * @param string $vehicle
     * @return CleanVehicleInterface
     */
    public static function vehicle(string $vehicle): CleanInterface
    {
        return DadataHelper::clean(CleanType::CLEAN_TYPE_VEHICLE, $vehicle);
    }
}