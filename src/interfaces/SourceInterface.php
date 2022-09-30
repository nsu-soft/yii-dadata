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
}