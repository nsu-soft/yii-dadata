<?php

namespace nsusoft\dadata\dto\suggest\bank;

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
}