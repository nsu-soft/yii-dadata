<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\api\Client;

abstract class BaseFactory implements FactoryInterface
{
    /**
     * @return Client
     */
    protected function getClient(): Client
    {
        return new Client();
    }

    /**
     * @param string $type
     * @return CleanInterface
     */
    abstract protected function getCleanData(string $type): CleanInterface;
}