<?php

namespace nsusoft\dadata\dto\suggest\party;

use nsusoft\dadata\dto\DtoInterface;

class StateDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $actualityDate;
    /**
     * @var string|null
     */
    public $registrationDate;
    /**
     * @var string|null
     */
    public $liquidationDate;
    /**
     * @var string|null
     */
    public $status;
    /**
     * @var string|null
     * @link https://github.com/hflabs/party-state/blob/master/party-state.csv
     */
    public $code;
}