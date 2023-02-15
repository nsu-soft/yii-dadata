<?php

namespace nsusoft\dadata\types\direct\traits;

trait CountryTrait
{
    /**
     * @inheritDoc
     */
    public function getCountry(): ?string
    {
        return $this->rawData['country'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCountryIsoCode(): ?string
    {
        return $this->rawData['country_iso_code'] ?? null;
    }
}