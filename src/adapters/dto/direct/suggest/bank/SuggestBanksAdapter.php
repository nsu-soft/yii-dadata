<?php

namespace nsusoft\dadata\adapters\dto\direct\suggest\bank;

use nsusoft\dadata\adapters\dto\BaseAdapter;
use nsusoft\dadata\dto\DtoInterface;
use nsusoft\dadata\dto\suggest\bank\BankDto;

/**
 * @property array $source
 */
class SuggestBanksAdapter extends BaseAdapter
{
    /**
     * @inheritDoc
     * @return BankDto[]
     */
    public function populate(): array
    {
        $result = [];

        foreach ($this->source as $item) {
            $dto = $this->createDto();

            $dto->value = $item['value'];
            $dto->unrestrictedValue = $item['unrestricted_value'];
            $dto->bic = $item['data']['bic'];
            $dto->swift = $item['data']['swift'];
            $dto->inn = $item['data']['inn'];
            $dto->kpp = $item['data']['kpp'];
            $dto->registrationNumber = $item['data']['registration_number'];
            $dto->correspondentAccount = $item['data']['correspondent_account'];
            $dto->treasuryAccounts = $item['data']['treasury_accounts'];

            $nameAdapter = new SuggestBankNameAdapter(['source' => $item['data']['name']]);
            $dto->name = $nameAdapter->populate();

            $dto->paymentCity = $item['data']['payment_city'];

            $opfAdapter = new SuggestOpfAdapter(['source' => $item['data']['opf']]);
            $dto->opf = $opfAdapter->populate();

            $addressAdapter = new SuggestAddressAdapter(['source' => $item['data']['address']]);
            $dto->address = $addressAdapter->populate();

            $stateAdapter = new SuggestStateAdapter(['source' => $item['data']['state']]);
            $dto->state = $stateAdapter->populate();

            $result[] = $item;
        }

        return $result;
    }

    /**
     * @inheritDoc
     * @return BankDto
     */
    protected function createDto(): DtoInterface
    {
        return new BankDto();
    }
}