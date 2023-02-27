<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\OpfDto;

/**
 * @property array $source
 */
class SuggestOpfAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): OpfDto
    {
        $dto = $this->createDto();

        $dto->code = $this->source['code'];
        $dto->full = $this->source['full'];
        $dto->short = $this->source['short'];
        $dto->type = $this->source['type'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return OpfDto
     */
    protected function createDto(): DtoInterface
    {
        return new OpfDto();
    }
}