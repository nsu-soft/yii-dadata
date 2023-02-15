<?php

namespace nsusoft\dadata\types\direct\suggest;

use nsusoft\dadata\types\direct\BaseDirect;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;

class SuggestDirect extends BaseDirect implements SuggestInterface
{
    /**
     * @inheritDoc
     */
    public function getValue(): string
    {
        return $this->rawData['value'];
    }
}