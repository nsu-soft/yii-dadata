<?php

namespace nsusoft\dadata\types\db;

use nsusoft\dadata\interfaces\SourceInterface;
use yii\base\Component;

class BaseCache extends Component
{
    /**
     * @var SourceInterface
     */
    protected $sourceModel;

    /**
     * @return SourceInterface
     */
    public function getSourceModel(): SourceInterface
    {
        return $this->sourceModel;
    }

    /**
     * @param SourceInterface $sourceModel
     * @return void
     */
    public function setSourceModel(SourceInterface $sourceModel): void
    {
        $this->sourceModel = $sourceModel;
    }
}