<?php

namespace nsusoft\dadata\adapters\dto;

use nsusoft\dadata\dto\DtoInterface;
use yii\base\Component;

abstract class BaseAdapter extends Component implements AdapterInterface
{
    /**
     * @var mixed Source data.
     */
    protected $source;

    /**
     * @inheritDoc
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * Creates DTO.
     * @return DtoInterface
     */
    abstract protected function createDto(): DtoInterface;
}