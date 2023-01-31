<?php

namespace nsusoft\dadata\interfaces;

use yii\db\ActiveQuery;

/**
 * @property string $source
 * @property ResultInterface $result
 */
interface SourceInterface
{
    /**
     * Gets standardizing result.
     * @return ActiveQuery
     */
    public function getResult(): ActiveQuery;

    /**
     * Sets result identifier for source model.
     * @param int $resultId
     * @return void
     */
    public function setResultId(int $resultId): void;
}
