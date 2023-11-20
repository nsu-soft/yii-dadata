<?php

namespace nsusoft\dadata\exceptions;

use yii\base\Exception;

class DadataException extends Exception
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return "Dadata problems";
    }
}