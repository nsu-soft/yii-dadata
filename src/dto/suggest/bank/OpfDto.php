<?php

namespace nsusoft\dadata\dto\suggest\bank;

use nsusoft\dadata\dto\DtoInterface;

class OpfDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $type;
    /**
     * @var string|null
     */
    public $full;
    /**
     * @var string|null
     */
    public $short;
}