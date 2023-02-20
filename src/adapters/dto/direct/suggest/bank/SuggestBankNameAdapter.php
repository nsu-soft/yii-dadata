<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\bank;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\bank\BankNameDto;

/**
 * @property array $source
 */
class SuggestBankNameAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return BankNameDto
     */
    public function populate(): BankNameDto
    {
        $dto = $this->createDto();

        $dto->payment = $this->source['payment'];
        $dto->full = $this->source['full'];
        $dto->short = $this->source['short'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return BankNameDto
     */
    protected function createDto(): DtoInterface
    {
        return new BankNameDto();
    }
}