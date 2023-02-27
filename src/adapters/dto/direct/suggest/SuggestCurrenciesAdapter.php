<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\CurrencyDto;

/**
 * @property array $source
 */
class SuggestCurrenciesAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return CurrencyDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->codeNumber = $item['data']['code'];
            $dto->codeName = $item['data']['strcode'];
            $dto->name = $item['data']['name'];
            $dto->country = $item['data']['country'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return CurrencyDto
     */
    protected function createDto(): DtoInterface
    {
        return new CurrencyDto();
    }
}