<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\OrganisationNameDto;

/**
 * @property array $source
 */
class SuggestOrganisationAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     */
    public function populate(): OrganisationNameDto
    {
        $dto = $this->createDto();

        $dto->fullWithOpf = $this->source['full_with_opf'];
        $dto->shortWithOpf = $this->source['short_with_opf'];
        $dto->full = $this->source['full'];
        $dto->short = $this->source['short'];

        return $dto;
    }

    /**
     * @inheritDoc
     * @return OrganisationNameDto
     */
    protected function createDto(): DtoInterface
    {
        return new OrganisationNameDto();
    }
}