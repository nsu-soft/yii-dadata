<?php

namespace nsusoft\dadata\dto\suggest\party;

use nsusoft\dadata\dto\DtoInterface;

class AddressDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $value;
    /**
     * @var string|null
     */
    public $unrestrictedValue;
    /**
     * @var string|null
     */
    public $source;
    /**
     * @var string|null
     */
    public $qualityCheck;
}