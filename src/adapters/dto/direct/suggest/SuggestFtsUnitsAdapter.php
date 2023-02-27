<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\FtsUnitDto;

/**
 * @property array $source
 */
class SuggestFtsUnitsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return FtsUnitDto[]
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
            $dto->nameShort = $item['data']['name_short'];
            $dto->inn = $item['data']['inn'];
            $dto->ogrn = $item['data']['ogrn'];
            $dto->okpo = $item['data']['okpo'];
            $dto->osf = $item['data']['osf'];
            $dto->address = $item['data']['address'];
            $dto->phone = $item['data']['phone'];
            $dto->fax = $item['data']['fax'];
            $dto->email = $item['data']['email'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return FtsUnitDto
     */
    protected function createDto(): DtoInterface
    {
        return new FtsUnitDto();
    }
}