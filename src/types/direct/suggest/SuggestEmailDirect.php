<?php

namespace nsusoft\dadata\types\direct\suggest;

use nsusoft\dadata\types\interfaces\suggest\SuggestEmailInterface;

class SuggestEmailDirect extends SuggestDirect implements SuggestEmailInterface
{
    /**
     * @inheritDoc
     */
    public function getUnrestrictedValue(): string
    {
        return $this->rawData['unrestricted_value'];
    }

    /**
     * @inheritDoc
     */
    public function getLocal(): string
    {
        return $this->rawData['local'];
    }

    /**
     * @inheritDoc
     */
    public function getDomain(): string
    {
        return $this->rawData['domain'];
    }
}