<?php

namespace nsusoft\dadata\api;

use nsusoft\dadata\exceptions\UnavailableServiceException;
use nsusoft\dadata\Module;
use Dadata\DadataClient;
use Dadata\Settings;
use DateTime;
use GuzzleHttp\Exception\GuzzleException;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Wrapper for DadataClient. Isolates all exceptions from DadataClient and replace them by module exceptions.
 */
class Client extends Component
{
    /**
     * @var DadataClient
     */
    private $client;

    /**
     * @inheritDoc
     * @throws InvalidConfigException
     */
    public function init(): void
    {
        $token = Module::getInstance()->token;
        $secret = Module::getInstance()->secret;

        if (is_null($token)) {
            throw new InvalidConfigException(Module::t('main', "You should specify token before using DaData module."));
        }

        $this->client = new DadataClient($token, $secret);
    }

    /**
     * @link https://dadata.ru/api/clean/
     * @param string $name
     * @param string $value
     * @return array
     */
    public function clean(string $name, string $value): array
    {
        return $this->call('clean', $name, $value);
    }

    /**
     * @link https://dadata.ru/api/clean/record/
     * @param array $structure
     * @param array $record
     * @return array
     */
    public function cleanRecord(array $structure, array $record): array
    {
        return $this->call('cleanRecord', $structure, $record);
    }

    /**
     * @link https://dadata.ru/api/find-affiliated/
     * @param string $query
     * @param int $count
     * @param string[] $scope Example: ['FOUNDERS', 'MANAGERS']
     * @return array
     */
    public function findAffiliated(string $query, int $count = Settings::SUGGESTION_COUNT, array $scope = []): array
    {
        return $this->call('findAffiliated', $query, $count, $scope);
    }

    /**
     * @link https://dadata.ru/api/find-party/
     * @param string $name
     * @param string $query
     * @param int $count
     * @param array $options Example: ['kpp' => '', 'branch_type' => '', 'type' => '']
     * @return array
     */
    public function findById(string $name, string $query, int $count = Settings::SUGGESTION_COUNT, array $options = []): array
    {
        return $this->call('findById', $name, $query, $count, $options);
    }

    /**
     * @link https://dadata.ru/api/geolocate/
     * @param string $name
     * @param float $latitude
     * @param float $longitude
     * @param float $radiusMeters
     * @param int $count
     * @param array $options
     * @return array
     */
    public function geoLocate(string $name, float $latitude, float $longitude, float $radiusMeters = 100, int $count = Settings::SUGGESTION_COUNT, array $options = []): array
    {
        return $this->call('geolocate', $name, $latitude, $longitude, $radiusMeters, $count, $options);
    }

    /**
     * @link https://dadata.ru/api/balance/
     * @return float
     */
    public function getBalance(): float
    {
        return $this->call('getBalance');
    }

    /**
     * @link https://dadata.ru/api/stat/
     * @param DateTime|null $date
     * @return array
     */
    public function getDailyStats(DateTime $date = null): array
    {
        return $this->call('getDailyStats', $date);
    }

    /**
     * @link https://dadata.ru/api/version/
     * @return array
     */
    public function getVersions(): array
    {
        return $this->call('getVersions');
    }

    /**
     * @param string $ip
     * @param array $options
     * @return array
     */
    public function ipLocate(string $ip, array $options = []): array
    {
        return $this->call('iplocate', $ip, $options);
    }

    /**
     * @link https://dadata.ru/api/suggest/
     * @param string $name
     * @param string $query
     * @param int $count
     * @param array $options
     * @return array
     */
    public function suggest(string $name, string $query, int $count = Settings::SUGGESTION_COUNT, array $options = []): array
    {
        return $this->call('suggest', $name, $query, $count, $options);
    }

    /**
     * @param string $method
     * @param mixed ...$params
     * @return mixed
     */
    protected function call(string $method, ...$params)
    {
        try {
            return $this->client->$method(...$params);
        } catch (GuzzleException $e) {
            throw new UnavailableServiceException($e->getMessage(), $e->getCode());
        }
    }
}
