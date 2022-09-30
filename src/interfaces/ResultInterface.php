<?php

namespace nsusoft\dadata\interfaces;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * @property string $result
 * @property SourceInterface[] $sources
 */
interface ResultInterface
{
    /**
     * Gets sources, which was standardized to this result.
     * @return ActiveQuery
     */
    public function getSources(): ActiveQuery;

    /**
     * @param array $params
     * @return ActiveRecord
     */
    public static function findOrCreate(array $params = []): ?ActiveRecord;
}