<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\StateDto;

class SuggestStateAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): StateDto
    {
        $dto = $this->createDto();

        $dto->actualityDate = $this->source['actuality_date'];
        $dto->registrationDate = $this->source['registration_date'];
        $dto->liquidationDate = $this->source['liquidation_date'];
        $dto->status = $this->source['status'];
        $dto->code = $this->source['code'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return StateDto
     */
    protected function createDto(): DtoInterface
    {
        return new StateDto();
    }
}