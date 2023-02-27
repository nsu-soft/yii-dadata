<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/currency/
 */
class CurrencyDto implements DtoInterface
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
    public $codeNumber;
    /**
     * @var string
     */
    public $codeName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $country;
}