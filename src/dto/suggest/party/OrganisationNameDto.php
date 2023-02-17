<?php

namespace nsusoft\dadata\dto\suggest\party;

use nsusoft\dadata\dto\DtoInterface;

class OrganisationNameDto implements DtoInterface
{
    /**
     * @var string|null
     */
    public $fullWithOpf;
    /**
     * @var string|null
     */
    public $shortWithOpf;
    /**
     * @var string|null
     */
    public $full;
    /**
     * @var string|null
     */
    public $short;
}