<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\api\Client;
use nsusoft\dadata\cache\clean\CleanCacheFactory;
use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\exceptions\UnavailableServiceException;
use nsusoft\dadata\Module;
use Psr\SimpleCache\InvalidArgumentException;
use yii\base\InvalidConfigException;

class DadataHelper
{
    /**
     * @param string $type
     * @param string $value
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function clean(string $type, string $value): array
    {
        $client = self::getClient();

        if (!Module::getInstance()->enableCache) {
            return $client->clean($type, $value);
        }

        $cache = CleanCacheFactory::getCacheHandler($type);

        if ($cache->has($value)) {
            return $cache->get($value);
        }

        $response = $client->clean($type, $value);

        if (!$cache->set($value, $response)) {
            throw new CacheException(Module::t('main', "A cache saving was failed."));
        }

        return $response;
    }

    /**
     * @param string $address
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function cleanAddress(string $address): array
    {
        return self::clean('address', $address);
    }

    /**
     * @param string $phone
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function cleanPhone(string $phone): array
    {
        return self::clean('phone', $phone);
    }

    /**
     * @param string $name
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function cleanName(string $name): array
    {
        return self::clean('name', $name);
    }

    /**
     * @param string $email
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function cleanEmail(string $email): array
    {
        return self::clean('email', $email);
    }

    /**
     * @param string $passport
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function cleanPassport(string $passport): array
    {
        return self::clean('passport', $passport);
    }

    /**
     * @param string $birthdate
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function cleanBirthdate(string $birthdate): array
    {
        return self::clean('birthdate', $birthdate);
    }

    /**
     * @param string $vehicle
     * @return array
     * @throws CacheException|InvalidConfigException|InvalidArgumentException|UnavailableServiceException
     */
    public static function cleanVehicle(string $vehicle): array
    {
        return self::clean('vehicle', $vehicle);
    }

    /**
     * @return Client
     * @throws InvalidConfigException
     */
    private static function getClient(): Client
    {
        return new Client();
    }
}