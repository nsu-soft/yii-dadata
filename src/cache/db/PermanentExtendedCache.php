<?php

namespace nsusoft\dadata\cache\db;

use nsusoft\dadata\cache\interfaces\ExtendedCacheInterface;
use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\Module;
use Psr\SimpleCache\InvalidArgumentException;
use Throwable;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

abstract class PermanentExtendedCache implements ExtendedCacheInterface
{
    /**
     * @inheritDoc
     */
    public function get($key, $options, $default = null)
    {
        $model = $this->findModel($key, $options)->one();

        if (is_null($model)) {
            return $default;
        }

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function set($key, $options, $value, $ttl = null): bool
    {
        if ($this->has($key, $options)) {
            return true;
        }

        $model = $this->createModel();

        if (!$model->load($value, '') || !$model->save()) {
            return false;
        }

        return true;
    }

    /**
     *
     * @throws Throwable
     */
    public function delete($key): bool
    {
        throw new CacheException(Module::t('main', "Method not implemented."), 500);
    }

    /**
     * @inheritDoc
     * @throws CacheException
     */
    public function clear(): bool
    {
        throw new CacheException(Module::t('main', "Method not implemented."), 500);
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
     *
     * @throws InvalidArgumentException
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
     */
    public function has($key, $options): bool
    {
        return $this->findModel($key, $options)->exists();
    }

    /**
     * @return ActiveRecord
     */
    abstract protected function createModel(): ActiveRecord;


    /**
     * @param string $value
     * @param array $options
     * @return ActiveQuery
     */
    abstract protected function findModel(string $value, array $options): ActiveQuery;
}