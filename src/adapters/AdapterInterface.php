<?php

namespace nsusoft\dadata\adapters;

use nsusoft\dadata\api\Client;

interface AdapterInterface
{
    /**
     * Sets DaData client to adapter.
     * @param Client $client
     * @return void
     */
    public function setClient(Client $client): void;

    /**
     * Call method from API.
     * @return array
     */
    public function call(): array;
}