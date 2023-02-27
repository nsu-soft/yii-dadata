<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\NameDto;

/**
 * @property array $source
 */
class SuggestNamesAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return NameDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->surname = $item['data']['surname'];
            $dto->name = $item['data']['name'];
            $dto->patronymic = $item['data']['patronymic'];
            $dto->gender = $item['data']['gender'];
            $dto->qualityCheck = $item['data']['qc'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return NameDto
     */
    protected function createDto(): DtoInterface
    {
        return new NameDto();
    }
}