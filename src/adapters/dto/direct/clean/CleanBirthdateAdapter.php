<?php

namespace nsusoft\dadata\adapters\dto\direct\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\BirthdateDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanBirthdateAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return BirthdateDto
     */
    public function populate(): BirthdateDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source['source'];
        $dto->birthdate = $this->source['birthdate'];
        $dto->qualityCheck = $this->source['qc'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return BirthdateDto
     */
    protected function createDto(): DtoInterface
    {
        return new BirthdateDto();
    }
}