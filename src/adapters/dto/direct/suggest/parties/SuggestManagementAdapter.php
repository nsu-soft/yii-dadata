<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\ManagementDto;

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