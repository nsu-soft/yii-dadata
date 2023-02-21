<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/mktu/
 */
class MktuDto implements DtoInterface
{
    public $value;
    public $unrestrictedValue;
    public $class;
    public $number;
    public $nameRu;
    public $nameEn;
    public $nameFr;
}