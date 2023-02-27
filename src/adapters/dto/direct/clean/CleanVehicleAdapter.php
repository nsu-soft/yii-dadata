<?php

namespace nsusoft\dadata\adapters\dto\direct\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\VehicleDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanVehicleAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return VehicleDto
     */
    public function populate(): VehicleDto
    {
        $dto = $this->createDto();

        $dto->source = $this->source['source'];
        $dto->result = $this->source['result'];
        $dto->brand = $this->source['brand'];
        $dto->model = $this->source['model'];
        $dto->qualityCheck = $this->source['qc'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return VehicleDto
     */
    protected function createDto(): DtoInterface
    {
        return new VehicleDto();
    }
}