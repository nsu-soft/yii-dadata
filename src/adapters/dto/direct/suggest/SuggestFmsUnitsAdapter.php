<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\FmsUnitDto;

/**
 * @property array $source
 */
class SuggestFmsUnitsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return FmsUnitDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->code = $item['data']['code'];
            $dto->name = $item['data']['name'];
            $dto->regionCode = $item['data']['region_code'];
            $dto->type = $item['data']['type'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return FmsUnitDto
     */
    protected function createDto(): DtoInterface
    {
        return new FmsUnitDto();
    }
}