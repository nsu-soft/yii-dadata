<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\PartyDto;

class SuggestPartiesAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return PartyDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['data']['value'];
            $dto->unrestrictedValue = $item['data']['unrestricted_value'];
            $dto->inn = $item['data']['inn'];
            $dto->kpp = $item['data']['kpp'];
            $dto->ogrn = $item['data']['ogrn'];
            $dto->ogrnDate = $item['data']['ogrn_date'];
            $dto->hid = $item['data']['hid'];
            $dto->type = $item['data']['type'];

            $organisationAdapter = new SuggestOrganisationAdapter(['source' => $item['data']['name']]);
            $dto->name = $organisationAdapter->populate();

            $ownerAdapter = new SuggestOwnerAdapter(['source' => $item['data']['fio']]);
            $dto->owner = $ownerAdapter->populate();

            $dto->okato = $item['data']['okato'];
            $dto->oktmo = $item['data']['oktmo'];
            $dto->okpo = $item['data']['okpo'];
            $dto->okogu = $item['data']['okogu'];
            $dto->okfs = $item['data']['okfs'];
            $dto->okved = $item['data']['okved'];
            $dto->okvedType = $item['data']['okved_type'];

            $opfAdapter = new SuggestOpfAdapter(['source' => $item['data']['opf']]);
            $dto->opf = $opfAdapter->populate();

            $managementAdapter = new SuggestManagementAdapter(['source' => $item['data']['management']]);
            $dto->management = $managementAdapter->populate();

            $dto->branchCount = $item['data']['branch_count'];
            $dto->branchType = $item['data']['branch_type'];
            $dto->address = $item['data']['address'];

            $stateAdapter = new SuggestStateAdapter(['source' => $item['data']['state']]);
            $dto->state = $stateAdapter->populate();

            $dto->invalid = $item['data']['invalid'];

            $result[] = $dto;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return PartyDto
     */
    protected function createDto(): DtoInterface
    {
        return new PartyDto();
    }
}