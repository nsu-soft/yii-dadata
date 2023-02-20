<?php

namespace nsusoft\dadata\dto\suggest;

use nsusoft\dadata\dto\DtoInterface;

class FnsUnitDto implements DtoInterface
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
    public $address;
    /**
     * @var string|null
     */
    public $phone;
    /**
     * @var string|null
     */
    public $comment;
    /**
     * @var string|null
     */
    public $paymentName;
    /**
     * @var string|null
     */
    public $oktmo;
    /**
     * @var string|null
     */
    public $inn;
    /**
     * @var string|null
     */
    public $kpp;
    /**
     * @var string|null
     */
    public $bankName;
    /**
     * @var string|null
     */
    public $bankBic;
    /**
     * @var string|null
     */
    public $bankCorrespondentAccount;
    /**
     * @var string|null
     */
    public $bankAccount;
    /**
     * @var string|null
     */
    public $parentCode;
    /**
     * @var string|null
     */
    public $parentName;
    /**
     * @var string|null
     */
    public $parentAddress;
    /**
     * @var string|null
     */
    public $parentPhone;
    /**
     * @var string|null
     */
    public $parentComment;
}