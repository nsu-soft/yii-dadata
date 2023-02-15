<?php

namespace nsusoft\dadata\interfaces;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * @property int $id
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
     * Gets result identifier. Empty if record hasn't already saved.
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @param array $params
     * @return ActiveRecord
     */
    public static function findOrCreate(array $params = []): ?ActiveRecord;
}
