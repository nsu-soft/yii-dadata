<?php

namespace nsusoft\dadata\adapters\dto\direct\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\PassportDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanPassportAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return PassportDto
     */
    public function populate(): PassportDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source['source'];
        $dto->series = $this->source['series'];
        $dto->number = $this->source['number'];
        $dto->qualityCheck = $this->source['qc'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return PassportDto
     */
    protected function createDto(): DtoInterface
    {
        return new PassportDto();
    }
}