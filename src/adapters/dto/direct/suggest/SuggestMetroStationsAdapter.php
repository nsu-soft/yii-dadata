<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\MetroStationDto;

/**
 * @property array $source
 */
class SuggestMetroStationsAdapter extends BaseAdapter
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

            $dto->value = $item['value'];
            $dto->cityKladrId = $item['data']['city_kladr_id'];
            $dto->cityFiasId = $item['data']['city_fias_id'];
            $dto->city = $item['data']['city'];
            $dto->name = $item['data']['name'];
            $dto->lineId = $item['data']['line_id'];
            $dto->lineName = $item['data']['line_name'];
            $dto->latitude = $item['data']['latitude'];
            $dto->longitude = $item['data']['longitude'];
            $dto->color = $item['data']['color'];
            $dto->isClosed = $item['data']['is_closed'];

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