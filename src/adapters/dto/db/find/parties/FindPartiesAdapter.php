<?php

namespace nsusoft\dadata\adapters\dto\db\find\parties;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\party\PartyDto;
use nsusoft\dadata\dto\suggest\party\AddressDto;
use nsusoft\dadata\dto\suggest\party\ManagementDto;
use nsusoft\dadata\dto\suggest\party\OpfDto;
use nsusoft\dadata\dto\suggest\party\OrganisationNameDto;
use nsusoft\dadata\dto\suggest\party\OwnerNameDto;
use nsusoft\dadata\dto\suggest\party\StateDto;
use nsusoft\dadata\models\FindPartyModel;

/**
 * @property FindPartyModel $source
 */
class FindPartiesAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return PartyDto
     */
    public function populate(): PartyDto
    {
        $dto = $this->createDto();

        $dto->value = $this->source->value;
        $dto->unrestrictedValue = $dto->value;
        $dto->value = $this->source->value;
        $dto->inn = $this->source->inn;
        $dto->kpp = $this->source->kpp;
        $dto->branchCount = $this->source->branch_count;
        $dto->branchType = $this->source->branch_type;
        $dto->ogrn = $this->source->ogrn;
        $dto->ogrnDate = $this->source->ogrn_date;
        $dto->hid = $this->source->hid;
        $dto->type = $this->source->type;
        $dto->okato = $this->source->okato;
        $dto->oktmo = $this->source->oktmo;
        $dto->okpo = $this->source->okpo;
        $dto->okogu = $this->source->okogu;
        $dto->okfs = $this->source->okfs;
        $dto->okved = $this->source->okved;
        $dto->okvedType = $this->source->okved_type;
        $dto->invalid = $this->source->invalid;
        $dto->cacheId = $this->source->id;

        $nameDto = new OrganisationNameDto();
        $nameDto->fullWithOpf = $this->source->name_full_with_opf;
        $nameDto->shortWithOpf = $this->source->name_short_with_opf;
        $nameDto->full = $this->source->name_full;
        $nameDto->short = $this->source->name_short;
        $dto->name = $nameDto;

        if (isset($this->source->fio_surname)) {
            $ownerDto = new OwnerNameDto();
            $ownerDto->surname = $this->source->fio_surname;
            $ownerDto->name = $this->source->fio_name;
            $ownerDto->patronymic = $this->source->fio_patronymic;
            $dto->owner = $ownerDto;
        }

        $opfDto = new OpfDto();
        $opfDto->code = $this->source->opf_code;
        $opfDto->full = $this->source->opf_full;
        $opfDto->short = $this->source->opf_short;
        $opfDto->type = $this->source->opf_type;
        $dto->opf = $opfDto;

        if (isset($this->source->management_name) || isset($this->source->management_post)) {
            $managementDto = new ManagementDto();
            $managementDto->name = $this->source->management_name;
            $managementDto->post = $this->source->management_post;
            $managementDto->disqualified = $this->source->management_disqualified;
            $dto->management = $managementDto;
        }

        $addressDto = new AddressDto();
        $addressDto->value = $this->source->address_value;
        $addressDto->unrestrictedValue = $this->source->address_unrestricted_value;
        $addressDto->source = $this->source->address_source;
        $addressDto->qualityCheck = $this->source->address_quality_check;
        $dto->address = $addressDto;

        $stateDto = new StateDto();
        $stateDto->actualityDate = $this->source->state_actuality_date;
        $stateDto->registrationDate = $this->source->state_registration_date;
        $stateDto->liquidationDate = $this->source->state_liquidation_date;
        $stateDto->status = $this->source->state_status;
        $stateDto->code = $this->source->state_code;
        $dto->state = $stateDto;

        return $dto;
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