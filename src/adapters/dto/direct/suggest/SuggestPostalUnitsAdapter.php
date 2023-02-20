<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\PostalUnitDto;

/**
 * @property array $source
 */
class SuggestPostalUnitsAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return PostalUnitDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->postalCode = $item['data']['postal_code'];
            $dto->isClosed = $item['data']['is_closed'];
            $dto->typeCode = $item['data']['type_code'];
            $dto->address = $item['data']['address_str'];
            $dto->addressKladrId = $item['data']['address_kladr_id'];
            $dto->addressQualityCheck = $item['data']['address_qc'];
            $dto->latitude = $item['data']['geo_lat'];
            $dto->longitude = $item['data']['geo_lon'];
            $dto->scheduleMonday = $item['data']['schedule_mon'];
            $dto->scheduleTuesday = $item['data']['schedule_tue'];
            $dto->scheduleWednesday = $item['data']['schedule_wed'];
            $dto->scheduleThursday = $item['data']['schedule_thu'];
            $dto->scheduleFriday = $item['data']['schedule_fri'];
            $dto->scheduleSaturday = $item['data']['schedule_sat'];
            $dto->scheduleSunday = $item['data']['schedule_sun'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return PostalUnitDto
     */
    protected function createDto(): DtoInterface
    {
        return new PostalUnitDto();
    }
}