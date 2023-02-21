<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\OkpdDto;

/**
 * @property array $source
 */
class SuggestOkpdItemsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return OkpdDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->idx = $item['data']['idx'];
            $dto->section = $item['data']['razdel'];
            $dto->code = $item['data']['kod'];
            $dto->name = $item['data']['name'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return OkpdDto
     */
    protected function createDto(): DtoInterface
    {
        return new OkpdDto();
    }
}