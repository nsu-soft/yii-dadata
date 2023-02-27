<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\OktmoDto;

/**
 * @property array $source
 */
class SuggestOktmoAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return OktmoDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->oktmo = $item['data']['oktmo'];
            $dto->areaType = $item['data']['area_type'];
            $dto->areaCode = $item['data']['area_code'];
            $dto->area = $item['data']['area'];
            $dto->subAreaType = $item['data']['subarea_type'];
            $dto->subAreaCode = $item['data']['subarea_code'];
            $dto->subArea = $item['data']['subarea'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return OktmoDto
     */
    protected function createDto(): DtoInterface
    {
        return new OktmoDto();
    }
}