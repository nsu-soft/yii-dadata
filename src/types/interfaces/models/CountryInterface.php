<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $country
 * @property string|null $countryIsoCode
 */
interface CountryInterface
{
    /**
     * @return string|null
     */
    public function getCountry(): ?string;

    /**
     * @return string|null
     */
    public function getCountryIsoCode(): ?string;
}