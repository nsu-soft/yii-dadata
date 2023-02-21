<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\MktuDto;

/**
 * @property array $source
 */
class SuggestMktuItemsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return MktuDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->class = $item['data']['class'];
            $dto->number = $item['data']['number'];
            $dto->nameRu = $item['data']['name_ru'];
            $dto->nameEn = $item['data']['name_en'];
            $dto->nameFr = $item['data']['name_fr'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return MktuDto
     */
    protected function createDto(): DtoInterface
    {
        return new MktuDto();
    }
}