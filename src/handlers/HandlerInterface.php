<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\dto\DtoInterface;

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
     * @return DtoInterface|null
     */
    public function clean(string $type, string $value): ?DtoInterface;

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return DtoInterface[]
     */
    public function suggest(string $type, string $value, array $options = []): array;

    /**
     * @param string $type
     * @param string $value
     * @param array $options
     * @return DtoInterface|null
     */
    public function findById(string $type, string $value, array $options = []): ?DtoInterface;
}