<?php

namespace nsusoft\dadata\adapters\methods;

use nsusoft\dadata\api\Client;
use yii\base\Component;

abstract class BaseAdapter extends Component implements AdapterInterface
{
    /**
     * @var Client
     */
    protected $client;

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }
}