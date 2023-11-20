<?php

namespace nsusoft\dadata\dto\suggest\party;

use nsusoft\dadata\dto\DtoInterface;

class ManagementDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $name;
    /**
     * @var string|null
     */
    public $post;

    /**
     * @var bool|null
     */
    public $disqualified;
}