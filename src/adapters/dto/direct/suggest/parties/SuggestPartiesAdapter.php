<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\PartyDto;

/**
 * @property array $source
 */
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

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->inn = $item['data']['inn'];
            $dto->ogrn = $item['data']['ogrn'];
            $dto->ogrnDate = date("Y-m-d", $item['data']['ogrn_date'] / 1000);
            $dto->hid = $item['data']['hid'];
            $dto->type = $item['data']['type'];

            $organisationAdapter = new SuggestOrganisationAdapter(['source' => $item['data']['name']]);
            $dto->name = $organisationAdapter->populate();

            if (isset($item['data']['fio'])) {
                $ownerAdapter = new SuggestOwnerAdapter(['source' => $item['data']['fio']]);
                $dto->owner = $ownerAdapter->populate();
            } else {
                $dto->kpp = $item['data']['kpp'];
                $dto->branchCount = $item['data']['branch_count'];
                $dto->branchType = $item['data']['branch_type'];
                $dto->invalid = $item['data']['invalid'];
            }

            if (isset($item['data']['management'])) {
                $managementAdapter = new SuggestManagementAdapter(['source' => $item['data']['management']]);
                $dto->management = $managementAdapter->populate();
            }

            $dto->okato = $item['data']['okato'];
            $dto->oktmo = $item['data']['oktmo'];
            $dto->okpo = $item['data']['okpo'];
            $dto->okogu = $item['data']['okogu'];
            $dto->okfs = $item['data']['okfs'];
            $dto->okved = $item['data']['okved'];
            $dto->okvedType = $item['data']['okved_type'];

            $opfAdapter = new SuggestOpfAdapter(['source' => $item['data']['opf']]);
            $dto->opf = $opfAdapter->populate();

            if (isset($item['data']['address'])) {
                $addressAdapter = new SuggestAddressAdapter(['source' => $item['data']['address']]);
                $dto->address = $addressAdapter->populate();
            }

            $stateAdapter = new SuggestStateAdapter(['source' => $item['data']['state']]);
            $dto->state = $stateAdapter->populate();

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