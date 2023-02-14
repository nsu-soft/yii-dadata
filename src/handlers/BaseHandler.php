<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;
use yii\base\Component;

class BaseHandler extends Component implements HandlerInterface
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
    public function clean(string $type, string $value): ?CleanInterface
    {
        if (isset($this->next)) {
            return $this->next->clean($type, $value);
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function suggest(string $type, string $value, array $options = []): ?SuggestInterface
    {
        if (isset($this->next)) {
            return $this->next->suggest($type, $value, $options);
        }

        return null;
    }
}