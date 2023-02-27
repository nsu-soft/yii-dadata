<?php

namespace nsusoft\dadata\dto\suggest\bank;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/bank/
 */
class BankDto implements DtoInterface
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
    public $bic;
    /**
     * @var string|null
     */
    public $swift;
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
    public $registrationNumber;
    /**
     * @var string|null
     */
    public $correspondentAccount;
    /**
     * @var string|null
     */
    public $treasuryAccounts;
    /**
     * @var BankNameDto
     */
    public $name;
    /**
     * @var string|null
     */
    public $paymentCity;
    /**
     * @var OpfDto
     */
    public $opf;
    /**
     * @var AddressDto
     */
    public $address;
    /**
     * @var StateDto
     */
    public $state;
}