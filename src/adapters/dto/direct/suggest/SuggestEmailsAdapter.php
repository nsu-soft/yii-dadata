<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\EmailDto;

/**
 * @property array $source
 */
class SuggestEmailsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return EmailDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();
            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->local = $item['local'];
            $dto->domain = $item['domain'];
            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return EmailDto
     */
    protected function createDto(): DtoInterface
    {
        return new EmailDto();
    }
}