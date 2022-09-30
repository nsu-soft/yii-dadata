<?php

namespace nsusoft\dadata\exceptions;

class UnavailableServiceException extends \RuntimeException
{
    /**
     * @see \yii\base\Exception::getName()
     */
    public function getName(): string
    {
        return "Service is unavailable";
    }
}