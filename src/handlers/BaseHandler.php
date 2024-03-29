<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\factories\FactoryInterface;
use yii\base\Component;

abstract class BaseHandler extends Component implements HandlerInterface
{
    /**
     * @var HandlerInterface
     */
    private $next;

    /**
     * @inheritDoc
     */
    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->next = $handler;
        return $this->next;
    }

    /**
     * @inheritDoc
     */
    public function clean(string $type, string $value): ?DtoInterface
    {
        if (isset($this->next)) {
            return $this->next->clean($type, $value);
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function suggest(string $type, string $value, array $options = []): array
    {
        if (isset($this->next)) {
            return $this->next->suggest($type, $value, $options);
        }

        return [];
    }

    /**
     * @inheritDoc
     */
    public function findById(string $type, string $value, array $options = []): ?DtoInterface
    {
        if (isset($this->next)) {
            return $this->next->findById($type, $value, $options);
        }

        return null;
    }

    /**
     * Gets wrappers creator.
     * @return FactoryInterface
     */
    abstract protected function createFactory(): FactoryInterface;
}