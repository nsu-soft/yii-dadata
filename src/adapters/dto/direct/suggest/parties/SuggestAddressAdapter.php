<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\AddressDto;

class SuggestAddressAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return AddressDto
     */
    public function populate(): AddressDto
    {
        $dto = $this->createDto();

        $dto->value = $this->source['value'];
        $dto->unrestrictedValue = $this->source['unrestricted_value'];
        $dto->source = $this->source['data']['source'];
        $dto->qualityCheck = $this->source['data']['qc'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return AddressDto
     */
    protected function createDto(): DtoInterface
    {
        return new AddressDto();
    }
}