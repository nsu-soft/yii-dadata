<?php

namespace nsusoft\dadata\types\interfaces\suggest;

use nsusoft\dadata\types\interfaces\models\OgrnInterface;

interface SuggestPartyInterface extends SuggestInterface, OgrnInterface
{
    /**
     * @return string
     */
    public function getUnrestrictedValue(): string;

    /**
     * @return string
     */
    public function getInn(): string;

    /**
     * @return string|null
     */
    public function getKpp(): ?string;

    /**
     * @return string|null
     */
    public function getHid(): ?string;
}