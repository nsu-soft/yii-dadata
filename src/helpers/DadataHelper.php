<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\handlers\HandlerFactory;

class DadataHelper
{
    /**
     * @param string $type
     * @param string $value
     * @return DtoInterface|null
     */
    public static function clean(string $type, string $value): ?DtoInterface
    {
        return HandlerFactory::getChain()->clean($type, $value);
    }

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return DtoInterface[]
     */
    public static function suggest(string $type, string $value, array $options = []): array
    {
        return HandlerFactory::getChain()->suggest($type, $value, $options);
    }

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return DtoInterface
     */
    public static function findById(string $type, string $value, array $options = []): ?DtoInterface
    {
        return HandlerFactory::getChain()->findById($type, $value, $options);
    }
}