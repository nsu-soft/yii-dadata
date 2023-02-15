<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $streetFiasId
 * @property string|null $streetKladrId
 * @property string|null $streetWithType
 * @property string|null $streetType
 * @property string|null $streetTypeFull
 * @property string|null $street
 */
interface StreetInterface
{
    /**
     * @return string|null
     */
    public function getStreetFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getStreetKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getStreetWithType(): ?string;

    /**
     * @return string|null
     */
    public function getStreetType(): ?string;

    /**
     * @return string|null
     */
    public function getStreetTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getStreet(): ?string;
}