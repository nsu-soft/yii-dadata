<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\dto\clean\address\AddressDto;
use nsusoft\dadata\dto\clean\BirthdateDto;
use nsusoft\dadata\dto\clean\EmailDto;
use nsusoft\dadata\dto\clean\NameDto;
use nsusoft\dadata\dto\clean\PassportDto;
use nsusoft\dadata\dto\clean\PhoneDto;
use nsusoft\dadata\dto\clean\VehicleDto;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\types\enums\CleanType;

/**
 * @link https://dadata.ru/api/clean/
 */
class CleanHelper
{
    /**
     * @link https://dadata.ru/api/clean/address/
     * @param string $address
     * @return AddressDto|null
     */
    public static function address(string $address): ?DtoInterface
    {
        return DadataHelper::clean(CleanType::ADDRESS, $address);
    }

    /**
     * @link https://dadata.ru/api/clean/phone/
     * @param string $phone
     * @return PhoneDto|null
     */
    public static function phone(string $phone): ?DtoInterface
    {
        return DadataHelper::clean(CleanType::PHONE, $phone);
    }

    /**
     * @link https://dadata.ru/api/clean/passport/
     * @param string $passport
     * @return PassportDto|null
     */
    public static function passport(string $passport): ?DtoInterface
    {
        return DadataHelper::clean(CleanType::PASSPORT, $passport);
    }

    /**
     * @link https://dadata.ru/api/clean/name/
     * @param string $name
     * @return NameDto|null
     */
    public static function name(string $name): ?DtoInterface
    {
        return DadataHelper::clean(CleanType::NAME, $name);
    }

    /**
     * @link https://dadata.ru/api/clean/email/
     * @param string $email
     * @return EmailDto|null
     */
    public static function email(string $email): ?DtoInterface
    {
        return DadataHelper::clean(CleanType::EMAIL, $email);
    }

    /**
     * @link https://dadata.ru/api/clean/birthdate/
     * @param string $birthdate
     * @return BirthdateDto|null
     */
    public static function birthdate(string $birthdate): ?DtoInterface
    {
        return DadataHelper::clean(CleanType::BIRTHDATE, $birthdate);
    }

    /**
     * @link https://dadata.ru/api/clean/vehicle/
     * @param string $vehicle
     * @return VehicleDto|null
     */
    public static function vehicle(string $vehicle): ?DtoInterface
    {
        return DadataHelper::clean(CleanType::VEHICLE, $vehicle);
    }
}