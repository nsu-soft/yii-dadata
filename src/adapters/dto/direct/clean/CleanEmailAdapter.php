<?php

namespace nsusoft\dadata\adapters\dto\direct\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\EmailDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanEmailAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return EmailDto
     */
    public function populate(): EmailDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source['source'];
        $dto->email = $this->source['email'];
        $dto->local = $this->source['local'];
        $dto->domain = $this->source['domain'];
        $dto->type = $this->source['type'];
        $dto->qualityCheck = $this->source['qc'];

        return $dto;
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