<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\ManagementDto;

/**
 * @property array $source
 */
class SuggestManagementAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): ManagementDto
    {
        $dto = $this->createDto();

        $dto->name = $this->source['name'];
        $dto->post = $this->source['post'];
        $dto->disqualified = $this->source['disqualified'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return ManagementDto
     */
    protected function createDto(): DtoInterface
    {
        return new ManagementDto();
    }
}