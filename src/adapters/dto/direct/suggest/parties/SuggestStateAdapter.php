<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\StateDto;

/**
 * @property array $source
 */
class SuggestStateAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): StateDto
    {
        $dto = $this->createDto();

        $dto->actualityDate = date("Y-m-d", $this->source['actuality_date'] / 1000);
        $dto->registrationDate = date("Y-m-d", $this->source['registration_date'] / 1000);
        $dto->liquidationDate = date("Y-m-d", $this->source['liquidation_date'] / 1000);
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