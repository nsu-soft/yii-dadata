<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\FnsUnitDto;

/**
 * @property array $source
 */
class SuggestFnsUnitsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return FnsUnitDto[]
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
            $dto->address = $item['data']['address'];
            $dto->phone = $item['data']['phone'];
            $dto->comment = $item['data']['comment'];
            $dto->paymentName = $item['data']['payment_name'];
            $dto->oktmo = $item['data']['oktmo'];
            $dto->inn = $item['data']['inn'];
            $dto->kpp = $item['data']['kpp'];
            $dto->bankName = $item['data']['bank_name'];
            $dto->bankBic = $item['data']['bank_bic'];
            $dto->bankCorrespondentAccount = $item['data']['bank_correspondent_account'];
            $dto->bankAccount = $item['data']['bank_account'];
            $dto->parentCode = $item['data']['parent_code'];
            $dto->parentName = $item['data']['parent_name'];
            $dto->parentAddress = $item['data']['parent_address'];
            $dto->parentPhone = $item['data']['parent_phone'];
            $dto->parentComment = $item['data']['parent_comment'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return FnsUnitDto
     */
    protected function createDto(): DtoInterface
    {
        return new FnsUnitDto();
    }
}