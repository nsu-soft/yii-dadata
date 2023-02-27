<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\bank;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\bank\OpfDto;

/**
 * @property array $source
 */
class SuggestOpfAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return OpfDto
     */
    public function populate(): OpfDto
    {
        $dto = $this->createDto();

        $dto->type = $this->source['type'];
        $dto->full = $this->source['full'];
        $dto->short = $this->source['short'];

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