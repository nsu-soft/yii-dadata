<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $flatFiasId
 * @property string|null $flatCadastralNumber
 * @property string|null $flatType
 * @property string|null $flatTypeFull
 * @property string|null $flat
 * @property string|null $flatArea
 * @property string|null $flatPrice
 */
interface FlatInterface
{
    /**
     * @return string|null
     */
    public function getFlatFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getFlatCadastralNumber(): ?string;

    /**
     * @return string|null
     */
    public function getFlatType(): ?string;

    /**
     * @return string|null
     */
    public function getFlatTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getFlat(): ?string;

    /**
     * @return string|null
     */
    public function getFlatArea(): ?string;

    /**
     * @return string|null
     */
    public function getFlatPrice(): ?string;
}