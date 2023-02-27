<?php

namespace nsusoft\dadata\cache\db\clean;

use nsusoft\dadata\cache\db\OneToOneCache;
use nsusoft\dadata\dto\clean\address\AddressDto;
use nsusoft\dadata\interfaces\SourceInterface;
use nsusoft\dadata\models\CleanAddressResult;
use nsusoft\dadata\models\CleanAddressSource;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

class CleanAddressCache extends OneToOneCache
{
    /**
     * @return CleanAddressSource
     */
    protected function createSource(): SourceInterface
    {
        return new CleanAddressSource();
    }

    /**
     * @param AddressDto $value
     * @return CleanAddressResult
     */
    protected function createResult($value): ActiveRecord
    {
        return CleanAddressResult::findOrCreate(['result' => $value->result]);
    }

    /**
     * @inheritDoc
     */
    protected function findSource(string $source): ActiveQuery
    {
        return CleanAddressSource::find()->where(['source' => $source]);
    }

    /**
     * @inheritDoc
     */
    protected function sourcesExist(): bool
    {
        return CleanAddressSource::find()->exists();
    }

    /**
     * @inheritDoc
     */
    protected function deleteAllSources(): bool
    {
        return (bool)CleanAddressSource::deleteAll();
    }
}