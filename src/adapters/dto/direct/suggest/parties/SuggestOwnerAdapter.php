<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\OwnerNameDto;

/**
 * @property array $source
 */
class SuggestOwnerAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): OwnerNameDto
    {
        $dto = $this->createDto();

        $dto->surname = $this->source['surname'];
        $dto->name = $this->source['name'];
        $dto->patronymic = $this->source['patronymic'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return OwnerNameDto
     */
    protected function createDto(): DtoInterface
    {
        return new OwnerNameDto();
    }
}