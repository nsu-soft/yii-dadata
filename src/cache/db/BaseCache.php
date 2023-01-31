<?php

namespace nsusoft\dadata\cache\db;

use nsusoft\dadata\interfaces\SourceInterface;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\db\StaleObjectException;

abstract class BaseCache implements CacheInterface
{
    /**
     * @inheritDoc
     */
    public function get($key, $default = null)
    {
        $sourceModel = $this->findSource($key)->one();

        if (is_null($sourceModel)) {
            return $default;
        }

        return $sourceModel;
    }

    /**
     * @inheritDoc
     */
    public function set($key, $value, $ttl = null): bool
    {
        if ($this->has($key)) {
            return true;
        }

        $resultModel = $this->createResult($value);

        if (!$resultModel->load($value, '') || !$resultModel->save()) {
            return false;
        }

        $sourceModel = $this->createSource();
        $sourceModel->setResultId($resultModel->id);

        if (!$sourceModel->load($value, '') || !$sourceModel->save()) {
            return false;
        }

        return true;
    }

    /**
     * @inheritDoc
     * @throws \Throwable
     * @throws StaleObjectException
     */
    public function delete($key): bool
    {
        $sourceModel = $this->findSource($key)->one();

        if (is_null($sourceModel)) {
            return true;
        }

        return (bool)$sourceModel->delete();
    }

    /**
     * @inheritDoc
     */
    public function clear(): bool
    {
        if (!$this->sourcesExist()) {
            return true;
        }

        return $this->deleteAllSources();
    }

    /**
     * @inheritDoc
     */
    public function getMultiple($keys, $default = null): array
    {
        $records = [];

        foreach ($keys as $key) {
            $records[$key] = $this->get($key, $default);
        }

        return $records;
    }

    /**
     * @inheritDoc
     */
    public function setMultiple($values, $ttl = null): bool
    {
        foreach ($values as $key => $value) {
            if (!$this->set($key, $value, $ttl)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @inheritDoc
     * @throws InvalidArgumentException
     * @throws StaleObjectException
     * @throws \Throwable
     */
    public function deleteMultiple($keys): bool
    {
        foreach ($keys as $key) {
            if (!$this->delete($key)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    public function has($key): bool
    {
        return $this->findSource($key)->exists();
    }

    /**
     * @return SourceInterface
     */
    abstract protected function createSource(): SourceInterface;

    /**
     * @param array $value
     * @return ActiveRecord
     */
    abstract protected function createResult(array $value): ActiveRecord;

    /**
     * @param string $source
     * @return ActiveQuery
     */
    abstract protected function findSource(string $source): ActiveQuery;

    /**
     * @return bool
     */
    abstract protected function sourcesExist(): bool;

    /**
     * @return bool
     */
    abstract protected function deleteAllSources(): bool;
}