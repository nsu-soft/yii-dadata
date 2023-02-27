<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\CarBrandDto;

/**
 * @property array $source
 */
class SuggestCarBrandsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return CarBrandDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->id = $item['data']['id'];
            $dto->name = $item['data']['name'];
            $dto->nameRu = $item['data']['name_ru'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return CarBrandDto
     */
    protected function createDto(): DtoInterface
    {
        return new CarBrandDto();
    }
}