<?php

namespace nsusoft\dadata\adapters\dto\direct\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\NameDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanNameAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return NameDto
     */
    public function populate(): NameDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source['source'];
        $dto->result = $this->source['result'];
        $dto->resultGenitive = $this->source['result_genitive'];
        $dto->resultDative = $this->source['result_dative'];
        $dto->resultAblative = $this->source['result_ablative'];
        $dto->surname = $this->source['surname'];
        $dto->name = $this->source['name'];
        $dto->patronymic = $this->source['patronymic'];
        $dto->gender = $this->source['gender'];
        $dto->qualityCheck = $this->source['qc'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return NameDto
     */
    protected function createDto(): DtoInterface
    {
        return new NameDto();
    }
}