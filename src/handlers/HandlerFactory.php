<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\Module;
use yii\base\Component;

class HandlerFactory extends Component
{
    /**
     * @return HandlerInterface
     */
    public static function getChain(): HandlerInterface
    {
        $cachePriority = Module::getInstance()->cachePriority;
        $cachePriority[] = DirectHandler::class;

        $chain = self::createHandler(array_shift($cachePriority));
        $handler = $chain;

        while (!empty($cachePriority)) {
            $handler = $handler->setNext(self::createHandler(array_shift($cachePriority)));
        }

        return $chain;
    }

    /**
     * @param string $className
     * @return HandlerInterface
     */
    private static function createHandler(string $className): HandlerInterface
    {
        return new $className();
    }
}