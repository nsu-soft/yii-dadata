<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $steadFiasId
 * @property string|null $steadKladrId
 * @property string|null $steadCadastralNumber
 * @property string|null $steadType
 * @property string|null $steadTypeFull
 * @property string|null $stead
 */
interface SteadInterface
{
    /**
     * @return string|null
     */
    public function getSteadFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getSteadKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getSteadCadastralNumber(): ?string;

    /**
     * @return string|null
     */
    public function getSteadType(): ?string;

    /**
     * @return string|null
     */
    public function getSteadTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getStead(): ?string;
}