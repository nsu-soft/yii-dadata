<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;

interface HandlerInterface
{
    /**
     * Sets next handler in Chain of Responsibility.
     * @param HandlerInterface $handler
     * @return void
     */
    public function setNext(HandlerInterface $handler): HandlerInterface;

    /**
     * @param string $type
     * @param string $value
     * @return CleanInterface|null
     */
    public function clean(string $type, string $value): ?CleanInterface;

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return SuggestInterface|null
     */
    public function suggest(string $type, string $value, array $options = []): ?SuggestInterface;
}