<?php

namespace nsusoft\dadata\types\direct;

use yii\base\Component;

/**
 * Base class for types, which are representing responses from Dadata API.
 */
abstract class BaseResponse extends Component
{
    /**
     * @var array Raw data from Dadata API.
     */
    protected $rawData = [];

    /**
     * @return array
     */
    public function getRawData(): array
    {
        return $this->rawData;
    }

    /**
     * @param array $rawData
     * @return void
     */
    public function setRawData(array $rawData): void
    {
        $this->rawData = $rawData;
    }
}