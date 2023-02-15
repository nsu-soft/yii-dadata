<?php

namespace nsusoft\dadata\helpers;

use nsusoft\dadata\handlers\HandlerFactory;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;

class DadataHelper
{
    /**
     * @param string $type
     * @param string $value
     * @return CleanInterface
     */
    public static function clean(string $type, string $value): CleanInterface
    {
        return HandlerFactory::getChain()->clean($type, $value);
    }

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return SuggestInterface[]
     */
    public static function suggest(string $type, string $value, array $options = []): array
    {
        return HandlerFactory::getChain()->suggest($type, $value, $options);
    }
}