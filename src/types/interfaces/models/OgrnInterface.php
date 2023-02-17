<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $ogrn
 * @property string|null $ogrnDate
 */
interface OgrnInterface
{
    /**
     * @return string|null
     */
    public function getOgrn(): ?string;

    /**
     * @return string
     */
    public function getOgrnDate(): ?string;
}