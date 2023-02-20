<?php

namespace nsusoft\dadata\dto\suggest\bank;

use nsusoft\dadata\dto\DtoInterface;

class BankNameDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $payment;
    /**
     * @var string|null
     */
    public $full;
    /**
     * @var string|null
     */
    public $short;
}