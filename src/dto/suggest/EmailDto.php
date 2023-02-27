<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/email/
 */
class EmailDto implements DtoInterface
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $unrestrictedValue;
    /**
     * @var string
     */
    public $local;
    /**
     * @var string
     */
    public $domain;
}