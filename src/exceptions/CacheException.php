<?php

namespace nsusoft\dadata\exceptions;

use yii\base\Exception;

class CacheException extends Exception
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return "Cache problems";
    }
}