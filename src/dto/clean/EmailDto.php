<?php

namespace nsusoft\dadata\dto\clean;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/clean/email/
 */
class EmailDto implements DtoInterface
{
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $local;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $qualityCheck;
}