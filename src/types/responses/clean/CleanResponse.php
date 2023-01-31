<?php

namespace nsusoft\dadata\types\responses\clean;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\responses\BaseResponse;

class CleanResponse extends BaseResponse implements CleanInterface
{
    /**
     * @inheritDoc
     */
    public function getSource(): string
    {
        return $this->rawData['source'];
    }

    /**
     * @inheritDoc
     */
    public function getResult(): string
    {
        return $this->rawData['result'];
    }
}