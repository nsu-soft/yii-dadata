<?php

namespace nsusoft\dadata\adapters\dto\db\clean;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\clean\MetroStationDto;
use nsusoft\dadata\dto\DtoInterface;

/**
 * @property array $source
 */
class CleanMetroAdapter extends BaseAdapter
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