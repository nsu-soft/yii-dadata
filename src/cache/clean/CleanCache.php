<?php

namespace nsusoft\dadata\cache\clean;

use nsusoft\dadata\interfaces\CleanCacheInterface;
use nsusoft\dadata\interfaces\ResultInterface;
use nsusoft\dadata\interfaces\SourceInterface;
use nsusoft\dadata\Module;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use yii\db\StaleObjectException;

class CleanCache extends Component implements CleanCacheInterface
{
    /**
     * @var string A model class name, that implements SourceInterface
     */
    protected $sourceClass;

    /**
     * @var string A model class name, that implements ResultInterface
     */
    protected $resultClass;

    /**
     * @inheritDoc
     * @throws InvalidConfigException
     */
    public function init() {
        if (!isset($this->sourceClass, $this->resultClass)) {
            throw new InvalidConfigException(Module::t('main', "Required parameters are missing."));
        }
    }

    /**
     * @inheritDoc
     */
    public function setSourceClass(string $sourceClass): void
    {
        $this->sourceClass = $sourceClass;
    }

    /**
     * @inheritDoc
     */
    public function setResultClass(string $resultClass): void
    {
        $this->resultClass = $resultClass;
    }

    /**
     * @inheritDoc
     */
    public function get($key, $default = null)
    {
        $source = $this->findSource($key);

        if (is_null($source)) {
            return $default;
        }

        return array_merge($source->toArray(), $source->result->toArray());
    }

    /**
     * @inheritDoc
     * @throws InvalidConfigException
     */
    public function set($key, $value, $ttl = null): bool
    {
        if ($this->has($key)) {
            return true;
        }

        /** @var ResultInterface|string $resultClass */
        $resultClass = $this->resultClass;
        /** @var ResultInterface|ActiveRecord $result */
        $result = $resultClass::findOrCreate(['result' => $value['result']]);

        if (!$result->load($value, '') || !$result->save()) {
            return false;
        }

        /** @var SourceInterface $source */
        $source = Yii::createObject($this->sourceClass);
        $source->result_id = $result->id;

        if (!$source->load($value, '') || !$source->save()) {
            return false;
        }

        return true;
    }

    /**
     * @inheritDoc
     * @throws StaleObjectException|\Throwable
     */
    public function delete($key): bool
    {
        $source = $this->findSource($key);

        if (is_null($source)) {
            return true;
        }

        return (bool)$source->delete();
    }

    /**
     * @inheritDoc
     */
    public function clear(): bool
    {
        /** @var ActiveRecord $sourceClass */
        $sourceClass = $this->sourceClass;

        if (!$sourceClass::find()->exists()) {
            return true;
        }

        return (bool)$sourceClass::deleteAll();
    }

    /**
     * @inheritDoc
     */
    public function getMultiple($keys, $default = null)
    {
        $output = [];

        foreach ($keys as $key) {
            $output[$key] = $this->get($key, $default);
        }

        return $output;
    }

    /**
     * @inheritDoc
     * @throws InvalidConfigException
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
     * @throws StaleObjectException|\Throwable
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
        /** @var ActiveRecord|string $sourceClass */
        $sourceClass = $this->sourceClass;
        return $sourceClass::find()->where(['source' => $key])->exists();
    }

    /**
     * @param string $key
     * @return SourceInterface|ActiveRecord|null
     */
    protected function findSource(string $key): ?SourceInterface
    {
        /** @var ActiveRecord|string $sourceClass */
        $sourceClass = $this->sourceClass;
        /** @var SourceInterface $source */
        $source = $sourceClass::findOne(['source' => $key]);

        return $source;
    }
}