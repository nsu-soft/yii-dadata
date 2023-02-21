<?php

namespace nsusoft\dadata\adapters\dto\direct\clean\address;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\address\MetroStationDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanMetroStationsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return MetroStationDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();
            $dto->name = $item['name'];
            $dto->line = $item['line'];
            $dto->distance = $item['distance'];
            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return MetroStationDto
     */
    protected function createDto(): DtoInterface
    {
        return new MetroStationDto();
    }
}