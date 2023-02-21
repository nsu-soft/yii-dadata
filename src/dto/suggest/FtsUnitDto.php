<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/fts_unit/
 */
class FtsUnitDto implements DtoInterface
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
     * @var string|null
     */
    public $code;
    /**
     * @var string|null
     */
    public $name;
    /**
     * @var string|null
     */
    public $nameShort;
    /**
     * @var string|null
     */
    public $inn;
    /**
     * @var string|null
     */
    public $ogrn;
    /**
     * @var string|null
     */
    public $okpo;
    /**
     * @var string|null
     */
    public $osf;
    /**
     * @var string|null
     */
    public $address;
    /**
     * @var string|null
     */
    public $phone;
    /**
     * @var string|null
     */
    public $fax;
    /**
     * @var string|null
     */
    public $email;
}