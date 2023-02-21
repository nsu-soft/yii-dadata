<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\CountryDto;

/**
 * @property array $source
 */
class SuggestCountriesAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return CountryDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->code = $item['data']['code'];
            $dto->alfa2 = $item['data']['alfa2'];
            $dto->alfa3 = $item['data']['alfa3'];
            $dto->nameShort = $item['data']['name_short'];
            $dto->name = $item['data']['name'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return CountryDto
     */
    protected function createDto(): DtoInterface
    {
        return new CountryDto();
    }
}