<?php

namespace nsusoft\dadata\adapters\dto\direct\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\PhoneDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanPhoneAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return PhoneDto
     */
    public function populate(): PhoneDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source['source'];
        $dto->type = $this->source['type'];
        $dto->phone = $this->source['phone'];
        $dto->countryCode = $this->source['country_code'];
        $dto->cityCode = $this->source['city_code'];
        $dto->number = $this->source['number'];
        $dto->extension = $this->source['extension'];
        $dto->provider = $this->source['provider'];
        $dto->country = $this->source['country'];
        $dto->region = $this->source['region'];
        $dto->city = $this->source['city'];
        $dto->timezone = $this->source['timezone'];
        $dto->qualityCheckConflict = $this->source['qc_conflict'];
        $dto->qualityCheck = $this->source['qc'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return PhoneDto
     */
    protected function createDto(): DtoInterface
    {
        return new PhoneDto();
    }
}