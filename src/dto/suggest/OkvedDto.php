<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/okved2/
 */
class OkvedDto implements DtoInterface
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
    public $idx;
    /**
     * @var string
     */
    public $section;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $name;
}