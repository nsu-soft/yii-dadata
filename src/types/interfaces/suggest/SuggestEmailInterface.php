<?php

namespace nsusoft\dadata\types\interfaces\suggest;

interface SuggestEmailInterface extends SuggestInterface
{
    /**
     * @return string
     */
    public function getUnrestrictedValue(): string;

    /**
     * @return string
     */
    public function getLocal(): string;

    /**
     * @return string
     */
    public function getDomain(): string;
}