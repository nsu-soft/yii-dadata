<?php

namespace nsusoft\dadata\dto\suggest\party;

use nsusoft\dadata\dto\DtoInterface;

class OpfDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $code;
    /**
     * @var string|null
     */
    public $full;
    /**
     * @var string|null
     */
    public $short;
    /**
     * @var string|null
     */
    public $type;
}