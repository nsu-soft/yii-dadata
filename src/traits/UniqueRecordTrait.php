<?php

namespace nsusoft\dadata\traits;

use nsusoft\dadata\Module;
use yii\base\InvalidCallException;
use yii\db\ActiveRecord;

/**
 * Для использования в ActiveRecord.
 * Пример использования:
 *
 * class User extends ActiveRecord {
 *      use UniqueRecordTrait;
 *      // Some code...
 * }
 */
trait UniqueRecordTrait
{
    /**
     * @param array $params
     * @return ActiveRecord|null
     */
    public static function findOrCreate(array $params = []): ?ActiveRecord
    {
        if (!method_exists(static::class, 'findOne')) {
            throw new InvalidCallException(Module::t('main', "Invalid call of {className}::findOrCreate method.", ['className' => static::class]));
        }

        return static::findOne($params) ?? new static($params);
    }
}
